<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use App\Helpers\Helper;
use App\Models\Bussine;
use App\Models\Invoice;
use App\Models\Usecfdi;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\WayToPay;
use App\Models\TaxRegimen;
use App\Models\TypeRelation;
use Illuminate\Http\Request;
use App\Helpers\Cfdi33Helper;
use App\Models\ComplementPay;
use App\Models\PaymentMethod;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\SuppliersPAC\Multifacturas\Config;
use App\Http\Requests\ComplementPayRequest;
use App\SuppliersPAC\Multifacturas\Timbrar;

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
            $request['no_parciality'] = count($invoice->complementpay) + 1;
        }else {
            $request['no_parciality'] = 1;
        }

        $unsignedXml = $this->createCfdiComplement($invoice, $request);
        $request['name_file'] = $unsignedXml;

        if(Helper::CheckRegisterPac()){
            $res = $this->timbrar($unsignedXml);
            if(!$res){
                $request['name_file'] = str_replace('_UNSIGNED', '', $unsignedXml);
            }else{
                return back()->with('warning', $res);
            }
        }

        ComplementPay::create($request->all());

        return back()->with('success', 'Perfecto');
    }

    public function createCfdiComplement(Invoice $invoice, Request $request)
    {
        try {
            $path = storage_path('app/public/csd_sat/cer');
            $fileKey = Auth::user()->bussine->key_private;
            $fileCer = Auth::user()->bussine->certificate;
            $certificate = new \CfdiUtils\Certificado\Certificado($path.'/'.$fileCer);

            $attributesHeader = $this->preparedingHead($request);
            $emitor = $this->preparedingEmitor();
            $receptor = $this->preparedingReceptor($invoice->customer_id);
            $concept = $this->preparedingConcepts();
            $pagos10 = $this->preparedingPagos10($request);
            $pagos_docs = $this->preparedingPagosDocsRelationship($request);

            $creator = new \CfdiUtils\CfdiCreator33($attributesHeader, $certificate);
            $comprobante = $creator->comprobante();
            $comprobante->addEmisor($emitor);
            $comprobante->addReceptor($receptor);
            $comprobante->addConcepto($concept);

            $pagos = new \CfdiUtils\Elements\Pagos10\Pagos();
            $pago = $pagos->addPago($pagos10);
            $pago->addDoctoRelacionado($pagos_docs);
            $comprobante->addComplemento($pagos);

            $filePem = \Storage::disk('key')->get($fileKey.'.pem');
            $creator->addSello($filePem, Auth::user()->bussine->password);

            $creator->moveSatDefinitionsToComprobante();

            $asserts = $creator->validate();
            if ($asserts->hasErrors()) {
                $err = [];
                foreach ($asserts->errors() as $error) {
                    $err[] = [
                        $error->getCode(),
                        $error->getStatus(),
                        $error->getTitle(),
                        $error->getExplanation(),
                    ];
                } 
            }
            
            /** Nombre de archivo no timbrado */
            $fileName = time() . '_' . Auth::user()->bussine->rfc . '_PAGO_UNSIGNED.xml'; 
            $creator->saveXml(public_path('storage/invoicexml/' . $fileName));

            return $fileName;
        }catch(\Throwable $th){
            return $th;
        }
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
        $data['TipoDeComprobante'] = $request->type_vaucher;
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

        $data['Rfc'] = $customer->rfc;
        $data['Nombre'] = $customer->bussine_name;
        $data['UsoCFDI'] = 'P01';

        return $data;
    }

    /**
     * Create Data of Concepts for CFDI33
     * @return array
     */
    protected function preparedingConcepts()
    {
        $data = [
            'ClaveProdServ' => '84111506',
            'Cantidad' => '1',
            'ClaveUnidad' => 'ACT',
            'Descripcion' => 'Pago',
            'ValorUnitario' => '0',
            'Importe' => '0',
        ];

        return $data;
    }

    protected function preparedingPagos10(Request $data)
    {
        $wayToPay = WayToPay::find($data['way_to_pay_id']);
        $currency = Currency::find($data['currency_id']);
        $pagos10 = [];
        
        $pagos10['FechaPago'] = $data['date_pay'];
        $pagos10['FormaDePagoP'] = $wayToPay->code;
        $pagos10['MonedaP'] = $currency->code;
        
        if($currency->code != 'MXN') {
            $pagos10['TipoCambioP'] = $data['type_change'];
        }

        $pagos10['Monto'] = $data['amount'];

        ($data['num_operation'] != '') 
            ? $pagos10['NumOperacion'] = $data['num_operation'] 
            : '';

        ($data['rfc_payer'] != '') 
            ? $pagos10['RfcEmisorCtaOrd'] = $data['rfc_payer']
            : '';

        ($data['account_payer'] != '')
            ? $pagos10['CtaOrdenante'] = $data['account_payer']
            : '';

        ($data['rfc_beneficiary'] != '')
            ? $pagos10['RfcEmisorCtaBen'] = $data['rfc_beneficiary']
            : '';

        ($data['account_beneficiary'] != '')
            ? $pagos10['CtaBeneficiario'] = $data['account_beneficiary']
            : '';

        return $pagos10;
    }

    protected function preparedingPagosDocsRelationship(Request $request)
    {
        $invoice = Invoice::with('complementpay')->where('bussine_id', Auth::user()->bussine_id)->find($request['invoice_id']);
        $currency = Currency::find($request['currency_id']);
        $dataXML = Cfdi33Helper::getXML($invoice->name_file);

        $pagos10_doc_relacionados = [];
        $pagos10_doc_relacionados ['IdDocumento'] = $dataXML->complemento->TimbreFiscalDigital['UUID'];
        $pagos10_doc_relacionados ['Serie'] = $dataXML['Serie'];
        $pagos10_doc_relacionados ['Folio'] = $dataXML['Folio'];
        $pagos10_doc_relacionados ['MonedaDR'] = $dataXML['Moneda'];

        if($currency->code != $dataXML['MonedaDR']) {
            $pagos10_doc_relacionados ['TipoCambioDR'] = $request['type_change'];
        }
        
        $pagos10_doc_relacionados ['MetodoDePagoDR'] = $dataXML['MetodoPago'];
        $pagos10_doc_relacionados ['NumParcialidad'] = $request['no_parciality'];

        $impSaldoAnt = $dataXML['Total'];
        if(count($invoice->complementpay) > 0){
            $i = count($invoice->complementpay) - 1;
            $impSaldoAnt =  $invoice->complementpay[$i]['amount'];
        }

        $pagos10_doc_relacionados ['ImpSaldoAnt'] = $impSaldoAnt;
        $pagos10_doc_relacionados ['ImpPagado'] = $request['amount'];
        $pagos10_doc_relacionados ['ImpSaldoInsoluto'] = $impSaldoAnt - $request['amount'];

        return $pagos10_doc_relacionados;
    }

    protected function timbrar($unsignedXml)
    {
        $params = new Config(
            Auth::user()->bussine->name_pac,
            Auth::user()->bussine->password_pac,
            Auth::user()->bussine->production_pac,
        );

        $timbrar = new Timbrar($params, $unsignedXml);
        return $timbrar->timbrar();
    }
}
