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
        .logo a{ width: 60px; }
        .tableprodserv{ border-collapse: collapse; }
        .tableprodserv thead{ background-color: darkgray; }
        .tableprodserv tbody tr td, .tableprodserv thead tr th{ border: 1px solid black; }
        .tableprodserv tbody tr td{padding: 5px;}
        .tabletotales{ border-collapse: collapse;}
        .tabletotales tr td{ border: 1px solid black;padding: 5px;}
        .clearfix { overflow: auto; clear: both;}
    </style>
</head>
<body>
    <table>
        <tr>
            <td class="header" colspan="3"><strong>Factura Electrónica - CFDI</strong></td>
        </tr>
        <tr>
            <td class="nameCompany" colspan="2"><h2 class="pm0"><strong>{{ \Auth::user()->bussine->bussine_name }}</strong></h2></td>
            <td><h3><strong>{{ \Auth::user()->bussine->start_serie }}{{ $datainvoice->folio }}</strong></h3></td>
        </tr>
        <tr>
            <td class="logo"><a href="https://donestandares.files.wordpress.com/2012/05/div-flotante-abajo.jpg"></a></td>
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
                <br>Folio Fiscal:
                <br>Fecha de comprobante: 
                <br>Fecha de certificado del CFDI: 
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
            <tr>
                <td>1</td>
                <td>0101010101</td>
                <td>H48</td>
                <td>Esta descripcion sirve unicamente para realizar mis pruebas por lo que quiero que sea algo largo</td>
                <td>$100.00 </td>
                <td>$0.00 </td>
                <td>$100.00 </td>
            </tr>
        </tbody>
    </table>

    <br>
    <div style="float: right;width: 10%; text-align: right;">
        $100
        <br>$0.00<hr>
        <strong>$100.00</strong><hr>
    </div>
    <div style="float: right;width: 10%; text-align: left;">
        SUBTOTAL:
        <br>IVA 16%: <hr>
        <strong>TOTAL:</strong><hr>
    </div>
    <div class="clearfix"></div>

    <br>
    <table style="width: 100%">
        <tr>
            <td>
                QR
            </td>
            <td>
                Serie del Certificado del emisor: 879878878789789789
                <br>Folio Fiscal JHJ5644-JL46-LJ4L-LKJL4J6-4656 
                <br>No. serie del Certificado del SAT: 9890809809890890809
                <br>Fecha y hora de certificación: 06-04-3020 16:45:32
                <br><strong>Este documento es una representación impresa de un CFDI</strong>
            </td>
        </tr>
        <tr>
            <td><strong>Sello Digital del Emisor:</strong></td>
            <td></td>
        </tr>
        <tr>
            <td><strong>Sello Digital del SAT:</strong></td>
            <td></td>
        </tr>
        <tr>
            <td><strong>Cadena original del complemento de certificación digital del SAT:</strong></td>
            <td></td>
        </tr>
    </table>
</body>
</html>