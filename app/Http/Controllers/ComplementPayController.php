<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use App\Models\Bussine;
use App\Models\Invoice;
use App\Models\Usecfdi;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\WayToPay;
use App\Models\TaxRegimen;
use App\Models\TypeRelation;
use Illuminate\Http\Request;
use App\Models\ComplementPay;
use App\Models\PaymentMethod;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ComplementPayRequest;

class ComplementPayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('bussine.complete');
    }

    /**
     * Create Complement Pay for Invoice
     *
     * @param [type] $id
     * @return void
     */
    public function createComplement($id)
    {
        $invoice = Invoice::with('currency', 'complementpay')->where('bussine_id', Auth::user()->bussine_id)->findOrFail($id);

        $bussine_id =  Auth::user()->bussine_id;
        $serie = Bussine::select('start_serie')->find($bussine_id);
        $wayToPays = WayToPay::all();
        $currencies = Currency::where('bussine_id',$bussine_id)->get();
        $paymentMethods = PaymentMethod::all();
        $usecfdi = Usecfdi::all();
        $taxes = Tax::where('bussine_id', $bussine_id)->get();
        $typeRelation = TypeRelation::all();

        return view('invoices.create_complementpay', [
            'invoice' => $invoice,
            'folio' => Invoice::generateFolio(),
            'serie' => $serie,
            'waytopays' => $wayToPays,
            'currencies' => $currencies,
            'paymentmethods' => $paymentMethods,
            'usecfdi' => $usecfdi,
            'taxes' => $taxes,
            'typeRelation' => $typeRelation
        ]);
    }
    
    public function storeComplement(ComplementPayRequest $request, $id)
    {
        $invoice = Invoice::with('complementpay')->where('bussine_id', Auth::user()->bussine_id)->findOrFail($id);

        $request['invoice_id'] = $invoice->id;

        if(count($invoice->complementpay) > 0){
            $request['no_parciality'] = count($invoice->complementpay);
        }else {
            $request['no_parciality'] = 1;
        }

        $comprobante = $this->preparedingHead($request);
        $emitor = $this->preparedingEmitor();
        $receptor = $this->preparedingReceptor($invoice->customer_id);

        ComplementPay::create($request->all());

        dd($request);
    }

    public function createCfdiComplement()
    {
    
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
        //$paymentMethod = PaymentMethod::select('code')->find($request->payment_method_id);
        $zip = Auth::user()->bussine->zip;
        $currency = Currency::select('code')->find($request->currency_id);

        $data['Version'] = '3.3';
        $data['Serie'] = $request->serie;
        $data['Folio'] = $request->folio;
        $data['Fecha'] = $request->date;
        //$data['FormaPago'] = $wayToPay->code;
        //$data['CondicionesDePago'] = '0';
        $data['SubTotal'] = '0';
        //$data['Descuento'] = '0';
        $data['Moneda'] = 'XXX';
        //$data['TipoCambio'] = $currency->exchange_rate;
        $data['Total'] = '0';
        $data['TipoDeComprobante'] = $request->type_voucher;
        //$data['MetodoPago'] = $paymentMethod->code;
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
        
        $data['Rfc'] = Auth::user()->bussine->rfc;
        $data['Nombre'] = Auth::user()->bussine->bussine_name;
        $data['RegimenFiscal'] = $regimen->code;
        
        return $data;
    }

    /**
     * Create Data of Receptor for CFDI33
     * @return array
     */
    protected function preparedingReceptor($customerId)
    {
        $data = [];
        $customer = Customer::select('rfc', 'bussine_name', 'usecfdi_id')->find($customerId);
        $code_usecfdi = Usecfdi::find($customer->usecfdi_id);

        $data['Rfc'] = $customer->rfc;
        $data['Nombre'] = $customer->bussine_name;
        $data['UsoCFDI'] = 'P01';

        return $data;
    }
}
