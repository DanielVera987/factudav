@extends('layouts.app')

@section('content')
@php
    use chillerlan\QRCode\{QRCode, QROptions};
@endphp
<div class="x_panel">
    <div class="x_title">                
        <div class="clearfix"></div>
    </div>
    
    <div class="x_content">
        <section class="content invoice">
            <div class="row">
                <div class="col-md-12">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                        <strong>{{ session()->get('success') }}</strong>
                        </div>
                    @endif
                    @if(session()->has('warning'))
                        <div class="alert alert-success">
                        <strong>{{ session()->get('warning') }}</strong>
                        </div>
                    @endif
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-6 col-sm-12">
                    <div class="invoice-header">
                        <h1>
                            <i class="fa fa-globe"></i> {{ $invoice->serie }}{{ $invoice->folio }}
                            @if(!$isTimbrado) <small><strong style="font-size: 15px;color: #ccc">PreCfdi</strong></small> @endif
                            <br>
                        </h1>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <a data-toggle="modal" data-target=".mod{{$invoice->id}}" class="btn btn-app btn-xs" style="float: right;">
                        <i class="fa fa-remove"></i> Cancelar
                    </a>
                    <a href="{{ route('invoices.createEmail', $invoice->id) }}" class="btn btn-app btn-xs" style="float: right;">
                        <i class="fa fa-send-o"></i> Email
                    </a>
                    <a href="{{ route('invoices.mark', [$invoice->id, 'Unpaid']) }}" class="btn btn-app btn-xs" style="float: right;">
                        <i class="fa fa-spinner"></i> Pendiente
                    </a>
                    <a href="{{ route('invoices.mark', [$invoice->id, 'Paid']) }}" class="btn btn-app btn-xs" style="float: right;">
                        <i class="fa fa-check"></i> Pagado
                    </a>
                </div>
                <div class="modal fade mod{{$invoice->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">¿Esta seguro?</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <a href="{{ route('invoices.cancel', [$invoice->id, 'cancelar']) }}" class="btn btn-sm btn-danger"> Cancelar</a>
                        </div>
                      </div>  
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 invoice-col">
                    <strong> Receptor </strong>
                    <address>
                        RFC: {{ $invoice->customer->rfc }}
                        <br>Nombre: <strong>{{ $invoice->customer->bussine_name }}</strong>
                        @if($invoice->type_voucher != 'P')
                        <br>Uso de CFDI: [{{ $invoice->usecfdi->code }}] {{ $invoice->usecfdi->name }}
                        @endif
                    </address>
                </div>

                <div class="col-md-4 col-sm-4 invoice-col">
                    <strong> Emisor </strong>
                    <address>
                        RFC: {{ $bussine->rfc }}
                        <br>Nombre: <strong>{{ $bussine->bussine_name }}</strong>
                        <br>Regimen fiscal: {{ \Auth::user()->bussine->taxregimen->name }}
                    </address>
                </div>

                <div class="col-md-4 col-sm-4 invoice-col">
                    <b>Metodo de pago:</b>
                    @php
                        $pm = App\Models\PaymentMethod::find($invoice->payment_method_id);
                        echo '['.$pm->code.']'.' '.$pm->name;
                    @endphp
                    <br>
                    <b>Forma de pago:</b> 
                    @php
                        $wtp = App\Models\WayToPay::find($invoice->way_to_pay_id);
                        echo '['.$wtp->code.']'.' '.$wtp->name;
                    @endphp
                    <br>
                    <b>Tipo de Comprobante :</b>
                    [{{ $invoice->type_voucher }}]
                    <br>
                </div>
            </div>
            
            @if (count($invoice->relationdocs) > 0)
            <div class="row">
                <div class="col-md-12">
                    <h4>Documentos Relacionados</h4>
                </div>

                @foreach ($invoice->relationdocs as $item)
                    <div class="col-md-12">
                        &nbsp;&nbsp; uuid: {{ $item->uuid }}
                    </div>
                @endforeach
            </div>
            <br />
            @endif

            @if($invoice->type_voucher != 'P')
            <div class="card-box table-responsive">
                <table class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ClavProdServ.</th>
                            <th>ClaUni.</th>
                            <th>Cant.</th>
                            <th style="width: 59%">Descripción</th>
                            <th>Desc.</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoice->detail as $key => $item)
                        <tr>
                            <td>{{ $item->produserv->code ?? '' }}</td>
                            <td>{{ $item->unit->code ?? ''}}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>
                                {{ $item->description }}
                                <br><br>
                                Impuestos
                                <br>
                                @php
                                    $taxes = App\Models\TaxDetail::with('tax')->where('detail_id', $item->id)->get();
                                    $t = '';
                                    foreach ($taxes as $tax){
                                        $t .= $tax->tax->code . ' ' . $tax->tax->tax . ' ' . $tax->tax->type . ' ' . $tax->tax->tasa . '<br>';
                                    }
                                    echo $t;
                                @endphp
                            </td>
                            <td>$ {{ $item->discount }}</td>
                            <td>$ {{ bcdiv($item->quantity * $item->amount, '1', 2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-md-6 col-12 col-sm-12"></div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th style="width:50%">Subtotal:</th>
                                <td>$ {{ $totales['subtotal'] }}</td>
                            </tr>
                            <tr>
                                <th>Descuento</th>
                                <td>$ {{ $totales['descuento'] }}</td>
                            </tr>
                            <tr>
                                <th>Retenidos</th>
                                <td>$ {{ $totales['totalImpRete'] }}</td>
                            </tr>
                            <tr>
                                <th>Trasladados</th>
                                <td>$ {{ $totales['totalImpTras'] }}</td>
                            </tr>
                            
                            <tr>
                                <th>Total:</th>
                                <td>$ {{ $totales['total'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-md-12">
                    <h4><strong>Información del Pago</strong></h4>
                </div>
                <div class="col-md-6">
                    <table style="width: 100%;">
                        <tr>
                            <td><strong>Forma de Pago :</strong></td>
                            <td>
                                @php
                                    $wtp = App\Models\WayToPay::find($invoice->way_to_pay_id);
                                    echo '['.$wtp->code.']'.' '.$wtp->name;
                                @endphp
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                <strong>Fecha de Pago :</strong><br />
                                <strong>Moneda de Pago :</strong><br />
                                <strong>Monto :</strong>
                            </td>
                            <td>
                                {{ $invoice->date_pay }}<br />
                                {{ $invoice->currency->code }}<br />
                                $ {{ $invoice->amount }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h4><strong>Documento Relacionado</strong></h4>
                    @php
                        $invoiceComplementPay = App\Models\ComplementPay::where('invoice_pay_id', $invoice->id)->get();
                        
                        foreach($invoiceComplementPay as $value) {
                            $invoiceRel = App\Models\Invoice::find($value['invoice_id']);
                        }
                    @endphp
                </div>
                <div class="col-md-6">
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                <strong>UUID Documento :</strong><br />
                                <strong>Número parcialidad :</strong>
                            </td>
                            <td>
                                {{ App\Helpers\Cfdi33Helper::getTimbreFiscal($invoiceRel->name_file) }} <br />
                                {{ $invoiceComplementPay[0]->no_parciality }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                <strong>Fecha de Pago :</strong><br />
                                <strong>Moneda de Pago :</strong><br />
                                <strong>Monto :</strong>
                            </td>
                            <td>
                                {{ $invoice->date_pay }}<br />
                                {{ $invoice->currency->code }}<br />
                                $ {{ $invoice->amount }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            @endif

            @if ( !empty($invoice->complementpay) && count($invoice->complementpay) > 0)    
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-6">
                        <h4><strong>Complemento de Pagos</strong></h4>
                        <table class="table" cellspacing="0" width="100%">
                            <tr>
                                <th>Serie y Folio</th>
                                <th>Importe Saldo Anterior</th>
                                <th>Importe Pagado</th>
                                <th>Importe Saldo Insoluto</th>
                                <th>N° Parcialidad</th>
                            </tr>
                            @foreach($invoice->complementpay as $key => $value)
                            @php
                                $invoicePay = \App\Models\Invoice::find($value->invoice_pay_id);
                            @endphp
                            <tr>
                                <td>
                                    <a href="{{ route('invoices.show', $invoicePay->id) }}">
                                        {{ $invoicePay['serie'] }}{{ $invoicePay['folio'] }}
                                    </a>
                                </td>
                                <td>$ {{ $value->amount_prev }}</td>
                                <td>$ {{ $value->amount_paid }}</td>
                                <td>$ {{ $value->amount_unpaid }}</td>
                                <td>{{ $value->no_parciality }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            @endif 

            <div class="row no-print">
                <div class=" ">
                <a href="{{ route('uploads.xml', $invoice->name_file) }}" class="btn btn-success pull-right"><i class="fa fa-download"></i> Descargar XML</button>
                <a href="{{ route('invoices.downloadPDF', $invoice->id) }}"
                    class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Descargar PDF</a>
            </div>
        </section>
    </div>
</div>
@endsection
