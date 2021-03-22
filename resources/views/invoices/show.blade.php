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
                <div class="col-md-12 col-sm-12">
                    <div class="invoice-header">
                        <h1>
                            <i class="fa fa-globe"></i> {{ Auth::user()->bussine->start_serie }}{{ $invoice->folio }}
                            @if(!$isTimbrado) <small><strong style="font-size: 15px;color: #ccc">PreCfdi</strong></small> @endif
                            <br>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 invoice-col">
                    <strong> Receptor </strong>
                    <address>
                        RFC: {{ $invoice->customer->rfc }}
                        <br>Nombre: <strong>{{ $invoice->customer->bussine_name }}</strong>
                        <br>Uso de CFDI: [{{ $invoice->usecfdi->code }}] {{ $invoice->usecfdi->name }}
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
                    <br><br>
                </div>
            </div>

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
