@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Invoice Design <small>Sample user invoice design</small></h2>
                
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
                            Emisor
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
                            Receptor
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
                            <br>
                            <b>Order ID:</b> 4F3S8J
                            <br>
                            <b>Payment Due:</b> 2/22/2014
                            <br>
                            <b>Account:</b> 968-34567
                        </div>
                    </div>


                    <div class="row">
                        <div class="  table">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Cantidad</th>
                                        <th style="width: 59%">Descripción</th>
                                        <th>Codigo #</th>
                                        <th>Unidad</th>
                                        <th>Producto/Servicio</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoice->detail as $item)
                                    <tr>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->description }}
                                        <td>Call of Duty</td>
                                        <td>455-981-221</td>
                                        </td>
                                        <td>$ {{ bcdiv($item->quantity * $item->amount, '1', 2) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead">Metodos de Pago:</p>
                            <img src="{{ asset('images/visa.png') }}" alt="Visa">
                            <img src="{{ asset('images/mastercard.png') }}" alt="Mastercard">
                            <img src="{{ asset('images/american-express.png') }}" alt="American Express">
                            <img src="{{ asset('images/paypal.png') }}" alt="Paypal">
                            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                            </p>
                        </div>

                        <div class="col-md-6">
                            <p class="lead">Amount Due 2/22/2014</p>
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