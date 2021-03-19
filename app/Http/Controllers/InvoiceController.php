<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use App\Models\Unit;
use App\Models\State;
use App\Models\Detail;
use App\Models\Bussine;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Usecfdi;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\WayToPay;
use App\Models\ProduServ;
use App\Models\TaxRegimen;
use App\Models\Municipality;
use Illuminate\Http\Request;
use App\Helpers\Cfdi33Helper;
use App\Mail\SendInvoiceMail;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\InvoiceRequest;
use App\SuppliersPAC\Multifacturas\Cancelar;
use Illuminate\Support\Facades\Storage;
use App\SuppliersPAC\Multifacturas\Config;
use App\SuppliersPAC\Multifacturas\Timbrar;

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
        
        $unsignedXml = $this->createCDFI($request);
        if (!$unsignedXml) return back()->with('warning', 'Se genero un error al procesar el XML, Intentalo de nuevo');
        $request['name_file'] = $unsignedXml;
        
        if($this->CheckRegisterPac()){
            $res = $this->timbrar($unsignedXml);
            if(!$res){
                $request['name_file'] = str_replace('_UNSIGNED', '', $unsignedXml);
            }else{
                return back()->with('warning', $res);
            }
        }

        $request['bussine_id'] = $bussine_id;

        $invoice = Invoice::create($request->all());
        $details = Detail::createDetail($invoice->id, $request);
        if(!$details) return back()->with('warning', 'Se genero un error al guardar la factura');
        
        return redirect(route('invoices.show', $invoice->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $invoice = Invoice::with(
                                'customer', 
                                'waytopay', 
                                'currency', 
                                'paymentmethod', 
                                'usecfdi',
                                'detail'
                            )
                        ->where('bussine_id', Auth::user()->bussine_id)
                        ->findOrFail($id);
                        
        $bussine = Bussine::select('rfc', 'email', 'telephone', 'street', 'bussine_name', 'zip')->findOrFail(Auth::user()->bussine_id);

        $totales = [];
        $comprobante = \CfdiUtils\Cfdi::newFromString(file_get_contents(public_path('storage/invoicexml/' . $invoice->name_file)))
            ->getQuickReader();

        $totales['subtotal']     = $comprobante['SubTotal'];
        $totales['descuento']    = $comprobante['Descuento'] ?? '0.00';
        $totales['totalImpTras'] = $comprobante->impuestos['totalImpuestosTrasladados'] ?? '0.00';
        $totales['totalImpRete'] = $comprobante->impuestos['totalImpuestosRetenidos'] ?? '0.00';
        $totales['total']        = $comprobante['Total'];

        return view('invoices.show', [
            'invoice' => $invoice,
            'bussine' => $bussine,
            'totales' => $totales,
            'isTimbrado' => Cfdi33Helper::isTimbrado($comprobante)
        ]);
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
        try {
            $path = storage_path('app/public/csd_sat/cer');
            $pathkey = storage_path('app/public/csd_sat/key');

            $fileCer = Auth::user()->bussine->certificate;
            $fileKey = Auth::user()->bussine->key_private;

            $certificate = new \CfdiUtils\Certificado\Certificado($path.'/'.$fileCer);

            /** Preparando los datos para la creacion del XML */
            $concepts = $this->preparedingConcepts($data);
            $attributesHeader = $this->preparedingHead($data);
            $emitor = $this->preparedingEmitor();
            $receptor = $this->preparedingReceptor($data);

            
            $creator = new \CfdiUtils\CfdiCreator33($attributesHeader, $certificate);
            
            $comprobante = $creator->comprobante();
            $comprobante->addEmisor($emitor);
            $comprobante->addReceptor($receptor);
            
            /** Crear Conceptos con sus respectivos Impuestos */
            $impuestosCfdi = [];
            $impuestosTrasladados = [];
            $impuestosRetenidos = [];
            foreach ($concepts as $concept) {
                $conceptos = $comprobante->addConcepto([
                    'ClaveProdServ' => $concept['ClaveProdServ'],
                    'Cantidad'      => $concept['Cantidad'],
                    'ClaveUnidad'   => $concept['ClaveUnidad'],
                    //'Unidad'        => $concept['Unidad'],
                    'Descripcion'   => $concept['Descripcion'],
                    'ValorUnitario' => $concept['ValorUnitario'],
                    'Importe'       => $concept['Importe'],
                    'Descuento'     => $concept['Descuento'],
                ]);

                if (isset($concept['Impuestos']) && count($concept['Impuestos']) > 0) {
                    foreach($concept['Impuestos'] as $tax) {
                        if($tax['Type'] == 'traslado') {

                            $addTraslado = [
                                'Base'       => $tax['Base'],
                                'Impuesto'   => $tax['Impuesto'],
                                'TipoFactor' => $tax['TipoFactor']
                            ];
                            if($tax['TipoFactor'] != 'Exento'){
                                $addTraslado['TasaOCuota'] = $tax['TasaOCuota'];
                                $addTraslado['Importe'] = $tax['Importe'];
                            }

                            $conceptos->addTraslado($addTraslado);

                            $searchTax = array_search($tax['Impuesto'], array_column($impuestosTrasladados, 'Impuesto'));
                            $searchTypeOFactor = array_search($tax['TipoFactor'], array_column($impuestosTrasladados, 'TipoFactor'));
                            $searchTasaOCuota = array_search($tax['TasaOCuota'], array_column($impuestosTrasladados, 'TasaOCuota'));

                            if($searchTax !== false 
                                && $searchTypeOFactor !== false 
                                && $searchTasaOCuota !== false
                                && $searchTax == $searchTypeOFactor
                                && $searchTax == $searchTasaOCuota
                                && $searchTypeOFactor == $searchTasaOCuota
                            ){
                                $index = $searchTax;
                                $impuestosTrasladados[$index]['Importe'] =  bcdiv($impuestosTrasladados[$index]['Importe'] + $tax['Importe'], '1', 2);
                            }else{
                                if($tax['TipoFactor'] != 'Exento'){
                                    $addTraslado = [
                                        //'Base'       => $tax['Base'],
                                        'Impuesto'   => $tax['Impuesto'],
                                        'TipoFactor' => $tax['TipoFactor']
                                    ];
                                
                                    $addTraslado['TasaOCuota'] = $tax['TasaOCuota'];
                                    $addTraslado['Importe'] = bcdiv($tax['Importe'], '1', 2);
                                    
                                    array_push($impuestosTrasladados, $addTraslado);
                                }
                            }

                            unset($addTraslado);
                        }else{
                            $conceptos->addRetencion([
                                'Base'       => $tax['Base'],
                                'Impuesto'   => $tax['Impuesto'],
                                'TipoFactor' => $tax['TipoFactor'],
                                'TasaOCuota' => $tax['TasaOCuota'],
                                'Importe'    => $tax['Importe'],
                            ]);

                            $searchTax = array_search($tax['Impuesto'], array_column($impuestosRetenidos, 'Impuesto'));

                            if($searchTax !== false){
                                $index = $searchTax;
                                $impuestosRetenidos[$index]['Importe'] =  bcdiv($impuestosRetenidos[$index]['Importe'] + $tax['Importe'], '1', 2);
                            }else{
                                array_push($impuestosRetenidos, [
                                    'Impuesto'   => $tax['Impuesto'],
                                    'Importe'    => bcdiv($tax['Importe'], '1', 2)
                                ]);
                            }
                        }
                    }
                } 
            }

            /** Crear Impuestos en el comprobante */
            if (count($impuestosTrasladados) > 0 || count($impuestosRetenidos) > 0) {
                if($this->SUM_TOTAL_TAXES_TRASLADADOS != 0){
                    $impuestosCfdi['TotalImpuestosTrasladados'] = $this->SUM_TOTAL_TAXES_TRASLADADOS;
                }
                if($this->SUM_TOTAL_TAXES_RETENIDOS != 0){
                    $impuestosCfdi['TotalImpuestosRetenidos'] = $this->SUM_TOTAL_TAXES_RETENIDOS;
                }

                $comprobante->addImpuestos($impuestosCfdi);
                if (count($impuestosTrasladados) > 0) {
                    foreach ($impuestosTrasladados as $result) {
                        $comprobante->multiTraslado($result);
                    }
                }

                if (count($impuestosRetenidos) > 0) {
                    foreach ($impuestosRetenidos as $result) {
                        $comprobante->multiRetencion($result);
                    }
                }
            } 

            $filePem = \Storage::disk('key')->get($fileKey.'.pem');
            $creator->addSello($filePem, Auth::user()->bussine->password);

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
            $fileName = time() . '_' . Auth::user()->bussine->rfc . '_UNSIGNED.xml'; 
            $creator->saveXml(public_path('storage/invoicexml/' . $fileName));
            //dd($fileName);
            return $fileName; 
        } catch (\Throwable $err) {
            return false;
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
        $paymentMethod = PaymentMethod::select('code')->find($request->payment_method_id);
        $zip = Auth::user()->bussine->zip;
        $currency = Currency::select('code')->find($request->currency_id);

        $data['Version'] = '3.3';
        $data['Serie'] = $request->serie;
        $data['Folio'] = $request->folio;
        $data['Fecha'] = $request->date;
        $data['FormaPago'] = $wayToPay->code;
        $data['CondicionesDePago'] = '0';
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
        
        $data['Rfc'] = Auth::user()->bussine->rfc;
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
        $discount = 0;

        foreach ($request['detail'] as $key => $value) {
            $codeProduct = ProduServ::select('code')->find($value['prodserv_id']);
            $unidad = Unit::select('code', 'name')->find($value['unit_id']);

            $importe = $value['quantity'] * $value['amount'];
            
            if(isset($value['taxes'])){   
                $taxes = [];
                $trasladoPrevious = 0;

                foreach ($value['taxes'] as $ky => $val) {
                    
                    $imp = $importe * $val['tasa'];

                    if($val['type'] == 'traslado') {
                        if ($val['code'] == '002' ) $trasladoPrevious = $imp;
                        $totalTaxTrasladado += bcdiv($imp, '1', 2);
                    } elseif($val['type'] == 'retenido') {
                        if ($val['code'] == '002') $imp = ($trasladoPrevious * 2) / 3;
                        $totalTaxRetenido += bcdiv($imp, '1', 2);
                    }

                    $taxes[] = [
                        'Base' => number_format($importe, 2, '.', ''),
                        'Impuesto' => $val['code'],
                        'TipoFactor' => $val['factor'],
                        'TasaOCuota' => bcdiv($val['tasa'], '1', 6),
                        'Importe' => bcdiv($imp, '1', 2),
                        'Type' => $val['type']
                    ];
                }
            }

            $data[$key] = [
                'ClaveProdServ' => $codeProduct->code,
                'Cantidad' => $value['quantity'],
                'ClaveUnidad' => $unidad->code,
                //'Unidad' => $unidad->name,
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
        $this->TOTAL = bcdiv($subtotal - $discount - $totalTaxRetenido + $totalTaxTrasladado, '1', 2);

        return $data;
    }

    /**
     * Dowload PDF of Invoice
     *
     * @param Request $id
     * @return void
     */
    public function downloadPDF($id)
    {
        $dataInvoice = Invoice::with(
                            'customer', 
                            'waytopay', 
                            'currency', 
                            'paymentmethod', 
                            'usecfdi',
                            'detail'
                        )->where('bussine_id', Auth::user()->bussine_id)->findOrFail($id);

        return $this->print($dataInvoice, true);
    }

    /**
     * Print Default for pdf 
     *
     * @param [type] $customer_invoice
     * @param boolean $download
     * @param boolean $save
     * @return void
     */
    public function print(Invoice $datainvoice, $download = false, $save = false)
    {
        $comprobante = \CfdiUtils\Cfdi::newFromString(file_get_contents(public_path('storage/invoicexml/' . $datainvoice->name_file)))
        ->getQuickReader();

        $tmp = 'default';
        if (Cfdi33Helper::isTimbrado($comprobante)) {
            $tmp = 'cfdi33';
        }

        $class_print = 'print' . ucfirst($tmp);
        return $this->$class_print($datainvoice, $download, $save);
    }

    /**
     * Print Cfdi33
     *
     * @return void
     */
    public function printCfdi33(Invoice $datainvoice, $download = false, $save = false){
        $comprobante = \CfdiUtils\Cfdi::newFromString(Storage::disk('xml')->get($datainvoice->name_file))
        ->getQuickReader();

        $datainvoice['qr'] = Cfdi33Helper::generateQR($datainvoice->name_file); 
        $datainvoice['numberToWords'] = Cfdi33Helper::NumberToWord($comprobante['Total'], 2,  $comprobante['Moneda']);
        $datainvoice['subtotal']     = $comprobante['SubTotal'];
        $datainvoice['descuento']    = $comprobante['Descuento'];
        $datainvoice['selloEmisor']  = $comprobante['Sello'] ?? '';
        $datainvoice['totalImpTras'] = $comprobante->impuestos['totalImpuestosTrasladados'] ?? '0.00';
        $datainvoice['totalImpRete'] = $comprobante->impuestos['totalImpuestosRetenidos'] ?? '0.00  ';
        $datainvoice['total']        = $comprobante['Total'];

        $datainvoice['folioFiscal']  = $comprobante->complemento->timbrefiscaldigital['UUID'] ?? '';
        $datainvoice['noCertificado']   = $comprobante->complemento->timbrefiscaldigital['NoCertificadoSAT'] ?? '';
        $datainvoice['FechaTimbrado']   = $comprobante->complemento->timbrefiscaldigital['FechaTimbrado'] ?? '';
        $datainvoice['SelloSAT']        = $comprobante->complemento->timbrefiscaldigital['SelloSAT'] ?? '';
        $datainvoice['SelloCFDI']        = $comprobante['Sello'] ?? '';

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadView('invoices.pdf_default', compact('datainvoice'));
        $fileName = Auth::user()->bussine->start_serie . $comprobante['folio'];

        if ($save) {
            return $pdf->output();
        }

        if($download){
            return $pdf->download($fileName . '.pdf');
        }

        //Redirect
        return $pdf->stream($fileName . '.pdf');
    }

    /**
     * Print without Cfdi33
     *
     * @return void
     */
    public function printDefault(Invoice $datainvoice, $download = false, $save = false){
        $comprobante = \CfdiUtils\Cfdi::newFromString(file_get_contents(public_path('storage/invoicexml/' . $datainvoice->name_file)))
        ->getQuickReader();

        $datainvoice['numberToWords'] = Cfdi33Helper::NumberToWord($comprobante['Total'], 2,  $comprobante['Moneda']);
        $datainvoice['fecha']        = $comprobante['Fecha'];
        $datainvoice['subtotal']     = $comprobante['SubTotal'];
        $datainvoice['descuento']    = $comprobante['Descuento'];
        $datainvoice['totalImpTras'] = $comprobante->impuestos['totalImpuestosTrasladados'] ?? '0.00';
        $datainvoice['totalImpRete'] = $comprobante->impuestos['totalImpuestosRetenidos'] ?? '0.00';
        $datainvoice['total']        = $comprobante['Total'];

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadView('invoices.pdf_default', compact('datainvoice'));
        $fileName = Auth::user()->bussine->start_serie . $comprobante['folio'];

        if ($save) {
            return $pdf->output();
        }

        if($download){
            return $pdf->download($fileName . '.pdf');
        }

        //Redirect
        return $pdf->stream($fileName . '.pdf');
    }

    /**
     * Download XML of Invoice Selected
     * 
     * @param $file File XML
     * @return Response
     */
    public function downloadXML($file)
    {
        $path = 'storage/invoicexml/'.$file;

        $headers = array(
            'Content-Type: application/xml',
        );
        return \Response::download($path, $file , $headers);
    }

    /**
     * CreateMail Invoice with PDF and XML
     */
    public function createEmail($id)
    {
        $invoice = Invoice::with('customer')->where('bussine_id', Auth::user()->bussine_id)->findOrFail($id);
        $serie = Auth::user()->bussine->start_serie;

        $fileName = Auth::user()->bussine->start_serie . $invoice->folio;

        return view('emails.create', [
            "id" => $invoice->id,
            "to" => $invoice->customer->email,
            "title" => $serie . $invoice->folio,
            "filename" => $fileName
        ]);
    }

    /**
     * SendMail Invoice with PDF and XML
     */
    public function sendMail(Request $request, $id)
    {
        $request->validate([
            "to" => ['required', 'email'],
            "subject" => ['required'],
            "message" => ['required'],
            "sendPDF" => [''],
            "sendXML" => [''],
        ]);
     
        $invoice = Invoice::with('customer')->where('bussine_id', Auth::user()->bussine_id)->findOrFail($id);

        $fileNamePdf = false;
        if(isset($request->sendPDF)){
            $fileNamePdf = $this->print($invoice);
        }

        $fileNameXML = false;
        if(isset($request->sendXML)){
            $fileNameXML = $invoice->name_file;
        }

        $email = new SendInvoiceMail(
                    $invoice,
                    $request->subject,
                    $request->message,
                    $fileNamePdf,
                    $fileNameXML,
                );

        Mail::to($request->to)->send($email);

        return redirect(route('invoice.createEmail', $invoice->id))->with('success', 'Correo Enviado');
    }

    /**
     * Check Register Pac for Invoices
     * 
     * @var bool
     */
    public function CheckRegisterPac()
    {
        if(Auth::user()->bussine->name_pac && Auth::user()->bussine->password_pac){
            return true;
        }

        return false;
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

    /**
     * Cancel of Invoice in SAT
     *
     * @param [type] $id
     * @param [type] $action
     * @return void
     */
    public function cancel($id, $action)
    {
        $invoice = Invoice::where('bussine_id', Auth::user()->bussine_id)->findOrFail($id);

        if ($this->CheckRegisterPac() && Cfdi33Helper::getTimbreFiscal($invoice->name_file)) {
            $uuid = Cfdi33Helper::getTimbreFiscal($invoice->name_file);

            $params = new Config(
                Auth::user()->bussine->name_pac,
                Auth::user()->bussine->password_pac,
                Auth::user()->bussine->production_pac,
                base64_encode(Storage::disk('certificate')->get(Auth::user()->bussine->certificate)),
                base64_encode(Storage::disk('key')->get(Auth::user()->bussine->key_private)),
                Auth::user()->bussine->password
            );

            $res = new Cancelar($params, $uuid, $action);

            dd($res);
            if($res->STATUS == "success") {
                $invoice->cancel_date = date('Y-m-d H:i:s');
                $invoice->cancel_acuse = $res->ACUSE;
                $invoice->cancel_status = $res->STATUS;
                $invoice->save();

                return back()->with('success', $res->CODIGO_RES_SAT);
            }
             
            return back()->with('warning', $res->CODIGO_RES_SAT);
        }
    }
}
