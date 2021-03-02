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
    /**
     * Set total of register concept
     * @var $TOTAL
     */
    private $TOTAL = 0;

    /**
     * Set subtotal of register concept
     * @var $SUBTOTAL
    */
    private $SUBTOTAL = 0;

    /**
     * Set descuento of register concept
     * @var $DESCUENTO
     */
    protected $DISCOUNT = 0;

    protected $SUM_TOTAL_TAXES_TRASLADADOS = 0;
    
    protected $SUM_TOTAL_TAXES_RETENIDOS = 0;

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

    /**
     * Create XML for CFDI33 
     * @return \CfdiUtils\CfdiCreator33 
     */
    protected function createCDFI($data)
    {
        $path = storage_path('app/public/csd_sat/cer');
        $pathkey = storage_path('app/public/csd_sat/key');

        $fileCer = Auth::user()->bussine->certificate;
        $fileKey = Auth::user()->bussine->key_private;

        $certificate = new \CfdiUtils\Certificado\Certificado($path.'/'.$fileCer);

        $concepts = $this->preparedingConcepts($data);
        $attributesHeader = $this->preparedingHead($data);
        $emitor = $this->preparedingEmitor();
        $receptor = $this->preparedingReceptor($data);
        
        $creator = new \CfdiUtils\CfdiCreator33($attributesHeader, $certificate);
        
        $comprobante = $creator->comprobante();
        $comprobante->addEmisor($emitor);
        $comprobante->addReceptor($receptor);

        foreach ($concepts as $concept) {
            $comprobante->addConcepto([
                'ClaveProdServ' => $concept['ClaveProdServ'],
                'Cantidad'      => $concept['Cantidad'],
                'ClaveUnidad'   => $concept['ClaveUnidad'],
                'Unidad'        => $concept['Unidad'],
                'Descripcion'   => $concept['Descripcion'],
                'ValorUnitario' => $concept['ValorUnitario'],
                'Importe'       => $concept['Importe'],
                'Descuento'     => $concept['Descuento'],
            ]);
        
            if (isset($concept['Impuestos']) && count($concept['Impuestos']) > 0) {
                foreach($concept['Impuestos'] as $tax) {
                    if($tax['Type'] == 'traslado') {
                        $comprobante->addTraslado([
                            'Base'       => $tax['Base'],
                            'Impuesto'   => $tax['Impuesto'],
                            'TipoFactor' => $tax['TipoFactor'],
                            'TasaOCuota' => $tax['TasaOCuota'],
                            'Importe'    => $tax['Importe']
                        ]);
                    }else{
                        $comprobante->addRetencion([
                            'Base'       => $tax['Base'],
                            'Impuesto'   => $tax['Impuesto'],
                            'TipoFactor' => $tax['TipoFactor'],
                            'TasaOCuota' => $tax['TasaOCuota'],
                            'Importe'    => $tax['Importe']
                        ]);
                    }
                        
                }
            } 
        }

        $filePem = Storage::disk('key')->get($fileKey.'.pem');
        $creator->addSello($filePem, Auth::user()->bussine->password);

        $asserts = $creator->validate();
        $asserts->hasErrors();
        
        $creator->saveXml(public_path('storage/invoicexml/PRUEBA.xml'));
        dd($comprobante);    
    }

    /**
     * Create Header for XML CFDI33
     * ['Version', 'Serie', 'Folio', 'Fecha']...
     * @return array
     */
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
        $data['SubTotal'] = $this->SUBTOTAL;
        $data['Descuento'] = $this->DISCOUNT;
        $data['Moneda'] = $currency->code;
        $data['TipoCambio'] = $currency->exchange_rate;
        $data['Total'] = $this->TOTAL;
        $data['TipoDeComprobante'] = 'I';
        $data['MetodoPago'] = $paymentMethod->code;
        $data['LugarExpedicion'] = $zip;

        return $data;
    }

    /**
     * Create Data of Emitor for CFDI33
     * @return array
     */
    protected function preparedingEmitor()
    {   
        $data = [];
        $regimen = TaxRegimen::select('code')->find(Auth::user()->bussine->taxregimen_id);
        
        $data['rfc'] = Auth::user()->bussine->rfc;
        $data['Nombre'] = Auth::user()->bussine->bussine_name;
        $data['RegimenFiscal'] = $regimen->code;
        
        return $data;
    }

    /**
     * Create Data of Receptor for CFDI33
     * @return array
     */
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

    /**
     * Create Data of Concepts for CFDI33
     * @return array
     */
    protected function preparedingConcepts($request)
    {
        $data = []; 
        $taxes = [];
        $subtotal = 0;
        $totalTaxTrasladado = 0;
        $totalTaxRetenido = 0;
        $total = 0;
        $discount = 0;

        foreach ($request['detail'] as $key => $value) {
            $codeProduct = ProduServ::select('code')->find($value['prodserv_id']);
            $unidad = Unit::select('code', 'name')->find($value['unit_id']);

            $importe = $value['quantity'] * $value['amount'];
            
            if(isset($value['taxes'])){   
                $trasladoPrevious = 0;

                foreach ($value['taxes'] as $ky => $val) {
                    
                    $imp = $importe * $val['tasa'];

                    if($val['type'] == 'traslado') {
                        if ($val['code'] == '002' ) $trasladoPrevious = $imp;
                        $totalTaxTrasladado += $imp;
                    } elseif($val['type'] == 'retenido') {
                        if ($val['code'] == '003') $imp = ($trasladoPrevious * 2) / 3;
                        $totalTaxRetenido += $imp;
                    }

                    $taxes[] = [
                        'Base' => number_format($importe, 2, '.', ''),
                        'Impuesto' => $val['code'],
                        'TipoFactor' => $val['factor'],
                        'TasaOCuota' => $val['tasa'],
                        'Importe' => $imp,
                        'Type' => $val['type']
                    ];
                }
            }

            $data[$key] = [
                'ClaveProdServ' => $codeProduct->code,
                'Cantidad' => $value['quantity'],
                'ClaveUnidad' => $unidad->code,
                'Unidad' => $unidad->name,
                'Descripcion' => $value['description'],
                'ValorUnitario' => $value['amount'],
                'Importe' => $importe,
                'Descuento' => $value['discount'],
                'Impuestos' => $taxes
            ];

            $discount += $value['discount'];
            $subtotal += $importe;
        }

        $this->SUBTOTAL = bcdiv($subtotal, '1', 2);
        $this->DISCOUNT = bcdiv($discount, '1', 2);
        $this->SUM_TOTAL_TAXES_TRASLADADOS = bcdiv($totalTaxTrasladado, '1', 2);
        $this->SUM_TOTAL_TAXES_RETENIDOS = bcdiv($totalTaxRetenido, '1', 2);
        $this->TOTAL = $subtotal - $discount - $totalTaxRetenido + $totalTaxTrasladado;

        return $data;
    }
}
