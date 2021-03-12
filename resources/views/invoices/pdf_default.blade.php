@php
    use chillerlan\QRCode\{QRCode, QROptions};
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body, html { font-size: 10px; }
        table{ width: 100%; }
        .header{
            padding: 8px;
            font-size: 12px;
            text-align: center;
            background-color: darkgray;
        }
        .nameCompany{
            font-size: 14px;
            font-weight: bold;
        }
        .pm0{
            padding: 0;
            margin: 0;
        }
        .logo img{ width: 120px; margin: 0px 20px; }
        .tableprodserv{ border-collapse: collapse; }
        .tableprodserv thead{ background-color: darkgray; }
        .tableprodserv tbody tr td, .tableprodserv thead tr th{ border: 1px solid black; }
        .tableprodserv tbody tr td{padding: 5px;}
        .tabletotales{ border-collapse: collapse;}
        .tabletotales tr td{ border: 1px solid black;padding: 5px;}
        .clearfix { overflow: auto; clear: both;}
        .DataSAT tr td{  width: 50%; }
    </style>
</head>
<body>
    <table>
        <tr>
            <td class="header" colspan="3"><strong>Factura Electrónica - @if(!isset($datainvoice->folioFiscal)) Pre @endif CFDI</strong></td>
        </tr>
        <tr>
            <td class="nameCompany" colspan="2"><h2 class="pm0"><strong>{{ \Auth::user()->bussine->bussine_name }}</strong></h2></td>
            <td><h3><strong>{{ \Auth::user()->bussine->start_serie }}{{ $datainvoice->folio }}</strong></h3></td>
        </tr>
        <tr>
            <td class="logo"><img src="{{ public_path('/images/logos/'. \Auth::user()->bussine->logo) }}" /></td>
            <td>
                <strong>Receptor</strong>
                <br>RFC: {{ $datainvoice->customer->rfc }}
                <br>Nombre: {{ $datainvoice->customer->bussine_name }}
                <br> {{ $datainvoice->customer->street }}
                <br>
                <br>Quintana Roo. Cozumel, CP {{ $datainvoice->customer->zip }}
                <br>Tel. {{ $datainvoice->customer->telephone }}
                <br>E-mail: danielveraangulo703@gmail.com
            </td>
            <td>
                <strong>Emisor</strong>
                <br>RFC: {{ \Auth::user()->bussine->rfc }}
                <br>{{ \Auth::user()->bussine->street }}
                <br>
                <br>Quintana Roo. Cozumel, CP {{ \Auth::user()->bussine->zip }}
                <br>Tel. {{ \Auth::user()->bussine->telephone }}
                <br>E-mail: {{ \Auth::user()->bussine->email }}
            </td>
        </tr>
        <tr>
            <td>
                @if(isset($datainvoice->folioFiscal))<br> Folio Fiscal: {{ $datainvoice->folioFiscal }} @endif
                <br>Fecha de comprobante: {{ $datainvoice->fecha }}
                @if(isset($datainvoice->folioFiscal))<br>Fecha de certificado del CFDI: {{ $datainvoice->FechaTimbrado }} @endif
            </td>
            <td>
                <br>Forma de pago: 
                @php
                    $wtp = App\Models\WayToPay::find($datainvoice->way_to_pay_id);
                    echo '['.$wtp->code.']'.' '.$wtp->name;
                @endphp
                <br>Metodo de pago: 
                @php
                    $pm = App\Models\PaymentMethod::find($datainvoice->payment_method_id);
                    echo '['.$pm->code.']'.' '.$pm->name;
                @endphp
                <br>Regimen fiscal: 
                <br>Uso de CFDI: [{{ $datainvoice->usecfdi->code }}] {{ $datainvoice->usecfdi->name }}
            </td>
            <td>
                <br>Moneda: {{ $datainvoice->currency->code }}
                <br>Tipo de cambio: {{ $datainvoice->currency->exchange_rate }}
                <br>Tipo de comprobante: I
            </td>
        </tr>
    </table>

    <br>
    <table class="tableprodserv">
        <thead>
            <tr>
                <th>Cant.</th>
                <th>ClavProdServ.</th>
                <th>ClaUni.</th>
                <th style="width: 40%">Descripción</th>
                <th>Precio Uni.</th>
                <th>Descuento.</th>
                <th>Importe</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datainvoice->detail as $detail)
            <tr>
                <td>{{ $detail->quantity }}</td>
                <td>{{ $detail->produserv->code }}</td>
                <td>{{ $detail->unit->code }}</td>
                <td>
                    {{ $detail->description }} 
                    <br><br>
                    <small>Impuestos
                    <br>
                    @php
                        $taxes = App\Models\TaxDetail::with('tax')->where('detail_id', $detail->id)->get();
                        $t = '';
                        foreach ($taxes as $tax){
                            $t .= $tax->tax->code . ' ' . $tax->tax->tax . ' ' . $tax->tax->type . ' ' . $tax->tax->tasa . '<br>';
                        }
                        echo $t;
                    @endphp
                    </small> 
                </td>
                <td>$ {{ $detail->amount }} </td>
                <td>$ {{ $detail->discount }} </td>
                <td>$ {{ bcdiv($detail->quantity * $detail->amount, '1', 2) }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <div style="float: right;width: 10%; text-align: right;">
        $ {{ $datainvoice->subtotal }}
        <br>$ {{ $datainvoice->descuento }}
        <br>$ {{ $datainvoice->totalImpRete }}
        <br>$ {{ $datainvoice->totalImpTras }}<hr>
        <strong>$ {{ $datainvoice->total }}</strong><hr>
    </div>
    <div style="float: right;width: 10%; text-align: left;">
        SUBTOTAL:
        <br>DESCUENTO:
        <br>RETENIDO:
        <br>TRASLADADO: <hr>
        <strong>TOTAL:</strong><hr>
    </div>
    <div class="clearfix"></div>
    <div style="float: right;width: 100%; text-align: right;">
        ({{ $datainvoice->numberToWords }} )
    </div>
    <div class="clearfix"></div>
    @if (isset($datainvoice->folioFiscal))    
        <table class="DataSAT">
            <tr>
                <td style="width: 40%;">
                    @php
                        echo '<img style="margin: 0px 50px;" width="180px" src="'.(new QRCode)->render($datainvoice->qr).'" alt="QR Code" />';
                    @endphp
                </td>
                <td>
                    Serie del Certificado del emisor: 879878878789789789
                    <br>Folio Fiscal: {{ $datainvoice->folioFiscal }} 
                    <br>No. serie del Certificado del SAT: {{ $datainvoice->noCertificado }}
                    <br>Fecha y hora de certificación: {{ $datainvoice->FechaTimbrado }}
                    <br><strong>Este documento es una representación impresa de un CFDI</strong>
                </td>
            </tr>
        </table>
        <strong>Sello Digital del Emisor:</strong></td>
        <textarea style="border: none" cols="30" rows="20">{{ $datainvoice->selloEmisor }}</textarea>
        <strong>Sello Digital del SAT:</strong></td>
        <textarea style="border: none" cols="30" rows="20">{{ $datainvoice->SelloSAT }}</textarea>
        <strong>Cadena original del complemento de certificación digital del SAT:</strong></td>
        <textarea style="border: none" cols="30" rows="20">{{ $datainvoice->SelloCFD }}</textarea>
    @endif
</body>
</html>