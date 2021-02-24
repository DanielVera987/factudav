<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use App\Models\State;
use App\Models\Detail;
use App\Models\Bussine;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Usecfdi;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\WayToPay;
use App\Models\Municipality;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\InvoiceRequest;
use App\Models\ProduServ;
use App\Models\TaxRegimen;
use App\Models\Unit;
use Illuminate\Support\Facades\Storage;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('bussine.complete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::with('customer')->where('bussine_id', Auth::user()->bussine_id)->orderByDesc('id')->get();
        return view('invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bussine_id =  Auth::user()->bussine_id;
        $serie = Bussine::select('start_serie')->find($bussine_id);
        $currencies = Currency::where('bussine_id',$bussine_id)->get();
        $states = State::where('country_id', 1)->get();
        $customers = Customer::where('bussine_id', $bussine_id)->get();
        $products = Product::where('bussine_id', $bussine_id)->get();
        $taxes = Tax::where('bussine_id', $bussine_id)->get();
        $usecfdi = Usecfdi::all();
        $wayToPays = WayToPay::all();
        $paymentMethods = PaymentMethod::all();

        return view('invoices.create', [
            'folio' => Invoice::generateFolio(),
            'serie' => $serie->start_serie,
            'currencies' => $currencies,
            'states' => $states,
            'customers' => $customers,
            'products' => $products,
            'taxes' => $taxes,
            'usecfdi' => $usecfdi,
            'waytopays' => $wayToPays,
            'paymentmethods' => $paymentMethods
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvoiceRequest $request)
    {   
        $bussine_id = Auth::user()->bussine_id;
        $existFolio = Invoice::where('bussine_id', $bussine_id)
                        ->where('folio', intval($request['folio']))
                        ->count();
        
        if ($existFolio > 0) return back()->with('warning', 'El folio ya esta en uso');

        $this->createCDFI($request);

        $request['bussine_id'] = $bussine_id;

        $invoice = Invoice::create($request->all());
        Detail::createDetail($invoice->id, $request);
        
        return redirect(route('invoices.index'))->with('success', 'Factura Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function createCDFI($data)
    {
        $path = storage_path('app/public/csd_sat/cer');
        $fileCer = Auth::user()->bussine->certificate;
        $certificate = new \CfdiUtils\Certificado\Certificado($path.'/'.$fileCer);

        $attributesHeader = $this->preparedingHead($data);
        $creator = new \CfdiUtils\CfdiCreator33($attributesHeader, $certificate);

        $comprobante = $creator->comprobante();

        $emitor = $this->preparedingEmitor();
        $comprobante->addEmisor($emitor);

        $receptor = $this->preparedingReceptor($data);
        $comprobante->addReceptor($receptor);

        $comprobante->multiTraslado([
            'ClaveProdServ',
            'Cantidad',
            'ClaveUnidad',
            'Unidad',
            'Descripcion',
            'ValorUnitario',
            'Importe',
            'Descuento',
        ]);
        
        $comprobante->addTraslado([
            'Base',
            'Impuesto',
            'TipoFactor',
            'TasaOCuota',
            'Importe'
        ]);
        
        $comprobante->addRetencion([
            'Base',
            'Impuesto',
            'TipoFactor',
            'TasaOCuota',
            'Importe'
        ]);

        dd($comprobante);
    }

    protected function preparedingHead($request)
    {
        $data = [];
        $wayToPay = WayToPay::select('code')->find($request->way_to_pay_id);
        $paymentMethod = PaymentMethod::select('code')->find($request->payment_method_id);
        $zip = Auth::user()->bussine->zip;
        $currency = Currency::select('code')->find($request->currency_id);

        $data['Version'] = '3.3';
        $data['Serie'] = $request->serie;
        $data['Folio'] = $request->folio;
        $data['Fecha'] = $request->date;
        $data['FormaPago'] = $wayToPay->code;
        $data['CondicionesDePago'] = '';
        $data['SubTotal'] = '';
        $data['Descuento'] = '';
        $data['Moneda'] = $currency->code;
        $data['TipoCambio'] = $currency->exchange_rate;
        $data['Total'] = '';
        $data['TipoDeComprobante'] = 'I';
        $data['MetodoPago'] = $paymentMethod->code;
        $data['LugarExpedicion'] = $zip;

        return $data;
    }

    protected function preparedingEmitor()
    {   
        $data = [];
        $regimen = TaxRegimen::select('code')->find(Auth::user()->bussine->taxregimen_id);
        
        $data['rfc'] = Auth::user()->bussine->rfc;
        $data['Nombre'] = Auth::user()->bussine->bussine_name;
        $data['RegimenFiscal'] = $regimen->code;
        
        return $data;
    }

    protected function preparedingReceptor($request)
    {
        $data = [];
        $customerId = $request['customer_id'];
        $customer = Customer::select('rfc', 'bussine_name', 'usecfdi_id')->find($customerId);
        $code_usecfdi = Usecfdi::find($customer->usecfdi_id);

        $data['Rfc'] = $customer->rfc;
        $data['Nombre'] = $customer->bussine_name;
        $data['UsoCFDI'] = $code_usecfdi->code;

        return $data;
    }

    protected function preparedingConcepts($request)
    {
        $data = []; 
        foreach ($request['detail'] as $key => $value) {
            $codeProduct = ProduServ::select('code')->find($value['prodserv_id']);
            $unidad = Unit::select('code', 'name')->find($value['unit_id']);

            $data[$key] = [
                'ClaveProdServ' => $codeProduct->code,
                'Cantidad' => $request->quantity,
                'ClaveUnidad' => $unidad->code,
                'Unidad' => $unidad->name,
                'Descripcion' => $request->description,
                'ValorUnitario' => $request->amount,
                'Importe' => $request->quantity * $request->amount,
                'Descuento' => $request->discount,
            ];
        }
    }
}
