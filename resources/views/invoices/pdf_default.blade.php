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
            <td><h3><strong>{{ $datainvoice->serie }}{{ $datainvoice->folio }}</strong></h3></td>
        </tr>
        <tr>
            <td class="logo"><img src="{{ public_path('/images/logos/'. \Auth::user()->bussine->logo) }}" /></td>
            <td>
                <strong>Receptor</strong>
                <br>RFC: {{ $datainvoice->customer->rfc }}
                <br>Nombre: {{ $datainvoice->customer->bussine_name }}
                <br>Uso de CFDI: {{ $datainvoice->usecfdi->name }}
            </td>
            <td>
                <strong>Emisor</strong>
                <br>RFC: {{ \Auth::user()->bussine->rfc }}
                <br>Regimen fiscal: {{ \Auth::user()->bussine->taxregimen->name }}
            </td>
        </tr>
    </table>

    @if (count($datainvoice->relationdocs) > 0)
        <div class="row">
            <div class="col-md-12">
                <h4>Documentos Relacionados</h4>
            </div>

            <div class="col-md-12">
            @foreach ($datainvoice->relationdocs as $item)
                &nbsp;&nbsp; uuid: {{ $item->uuid }} <br />
            @endforeach
            </div>
        </div>
    @endif

    <br />
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
    <div style="float: left;width: 50%; text-align: right;">
        <table>
            <tr>
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
        </td>
        <td>
            <br>Moneda: {{ $datainvoice->currency->code }}
            <br>Tipo de cambio: {{ $datainvoice->currency->exchange_rate }}
            <br>Tipo de comprobante: {{ $datainvoice->type_voucher }}
        </td>
            </tr>
        </table>
    </div>
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
                <td style="width: 8%;">
                    @php
                        echo '<img width="75px" src="'.(new QRCode)->render($datainvoice->qr).'" alt="QR Code" />';
                    @endphp
                </td>
                <td>
                    <br>Folio Fiscal: {{ $datainvoice->folioFiscal }} 
                    <br>No. serie del Certificado del SAT: {{ $datainvoice->noCertificado }}
                    <br>Fecha y hora de certificación: {{ $datainvoice->FechaTimbrado }}
                    <br><strong>Este documento es una representación impresa de un CFDI</strong>
                </td>
            </tr>
        </table>
        <strong style="font-size: 8px;">Sello Digital del CDFI:</strong></td>
        <textarea style="border: none;font-size: 8px;" >{{ $datainvoice->SelloCFDI }}</textarea>
        <strong style="font-size: 8px;">Sello Digital del SAT:</strong></td>
        <textarea style="border: none;font-size: 8px;" >{{ $datainvoice->SelloSAT }}</textarea>
        <strong style="font-size: 8px;">Cadena original del complemento de certificación digital del SAT:</strong></td>
        <textarea style="border: none;font-size: 8px;" >{{App\Helpers\Cfdi33Helper::getCadenaOrigen($datainvoice->name_file)}}</textarea>
    @endif
</body>
</html>