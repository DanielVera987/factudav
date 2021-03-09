<?php

namespace App\Http\Helpers\Cfdi33;

use NumberToWords\NumberToWords;

class Helper{

  public static function generateQR($filename){
    $xmlContents = file_get_contents(public_path('storage/invoicexml/' . 'INV-000267_59.xml'));

    $cfdi = \CfdiUtils\Cfdi::newFromString($xmlContents);
    $parameters = \CfdiUtils\ConsultaCfdiSat\RequestParameters::createFromCfdi($cfdi);

    return $parameters->expression();
  }

  public static function NumberToWord($total)
  {
    $numberToWords = new NumberToWords();
    $numberTransformer = $numberToWords->getNumberTransformer('es');
    return $numberTransformer->toWords($total);
  }
}