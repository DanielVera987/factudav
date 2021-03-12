<?php

namespace App\Helpers;

use Luecano\NumeroALetras\NumeroALetras;

class Cfdi33Helper{

  /**
   * Generate Code QR for SAT
   *
   * @param [type] $filename
   * @return /Code QR
   */
  public static function generateQR($filename){
    $xmlContents = file_get_contents(public_path('storage/invoicexml/' . 'INV-000267_59.xml'));

    $cfdi = \CfdiUtils\Cfdi::newFromString($xmlContents);
    $parameters = \CfdiUtils\ConsultaCfdiSat\RequestParameters::createFromCfdi($cfdi);

    return $parameters->expression();
  }

  /**
   * Convert number to word
   *
   * @param [type] $number
   * @param integer $decimal
   * @param string $currency
   * @param string $centavos
   * @return NumeroALetras->toMoney()
   */
  public static function NumberToWord($number, $decimal = 2, $currency = 'MXN', $centavos = 'CENTAVOS')
  {
    switch ($currency) {
      case 'MXN':
        $currency = 'PESOS MEXICANOS';
        break;
      case 'USD':
        $currency = 'DOLARES';
        break;
      case 'EUR':
        $currency = 'EUROS';
        break;
    }

    $formatter = new NumeroALetras();
    return $formatter->toMoney($number, $decimal = 2, $currency, $centavos);
  }

  /**
   * Check is TimbreFiscalDigital exist
   *
   * @return void
   */
  public static function isTimbrado($cfdi)
  {
    if (isset($cfdi->complemento->TimbreFiscalDigital)) {
      return true;
    }

    return false;
  }
}