@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">                
                <div class="clearfix"></div>
            </div>
            
            <div class="x_content">
                <section class="content invoice">
                    <div class="row">
                        <div class="  invoice-header">
                            <h1>
                                <i class="fa fa-globe"></i> {{ Auth::user()->bussine->start_serie }}{{ $invoice->folio }}
                                <small class="pull-right">Fecha y Hora: {{ $invoice->date }}</small>
                            </h1>
                        </div>
                    </div>

                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            <strong> Emisor </strong>
                            <address>
                                Razon Social: <strong>{{ $bussine->bussine_name }}</strong>
                                <br>RFC: {{ $bussine->rfc }}
                                <br>Calle: {{ $bussine->street }}
                                <br>Estado: New York, CP {{ $bussine->zip }}
                                <br>Télefono: {{ $bussine->telephone }} 
                                <br>Email: {{ $bussine->email }}
                            </address>
                        </div>

                        <div class="col-sm-4 invoice-col">
                            <strong> Receptor </strong>
                            <address>
                                Razon Social: <strong>{{ $invoice->customer->bussine_name }}</strong>
                                <br>RFC: {{ $invoice->customer->rfc }}
                                <br>Calle: {{ $invoice->customer->street }}
                                <br>Estado: New York, CP {{ $invoice->customer->zip }}
                                <br>Tétefono: {{ $invoice->customer->telephone }}
                                <br>Email: {{ $invoice->customer->email }}
                            </address>
                        </div>

                        <div class="col-sm-4 invoice-col">
                            <b>{{ Auth::user()->bussine->start_serie }}{{ $invoice->folio }}</b>
                            <br>
                            <b>Metodo de pago:</b>  {{ $invoice->paymentmethod }}
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
                            <b>Uso de CFDI:</b> [{{ $invoice->usecfdi->code }}] {{ $invoice->usecfdi->name }}
                            <br>
                        </div>
                    </div>


                    <div class="row">
                        <div class="  table">
                            <table class="table table-striped">
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
                                        <td>{{ $item->produserv->code }}</td>
                                        <td>{{ $item->unit->code }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>$ {{ $item->discount }}</td>
                                        <td>$ {{ bcdiv($item->quantity * $item->amount, '1', 2) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6"></div>

                        <div class="col-md-6">
                            <p class="lead"></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>$250.30</td>
                                        </tr>
                                        <tr>
                                            <th>Descuento</th>
                                            <td>$10.34</td>
                                        </tr>
                                        <tr>
                                            <th>Trasladados</th>
                                            <td>$10.34</td>
                                        </tr>
                                        <tr>
                                            <th>Retenidos</th>
                                            <td>$10.34</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>$265.24</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="row no-print">
                        <div class=" ">
                        <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                        <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                        <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                    </div>
                </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection