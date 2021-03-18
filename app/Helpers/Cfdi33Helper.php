<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Luecano\NumeroALetras\NumeroALetras;
use \CfdiUtils\XmlResolver\XmlResolver;
use \CfdiUtils\CadenaOrigen\DOMBuilder;

class Cfdi33Helper{

  /**
   * Generate Code QR for SAT
   *
   * @param [type] $filename
   * @return /Code QR
   */
  public static function generateQR($filename){
    $xmlContents = file_get_contents(public_path('storage/invoicexml/' . $filename));

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

  /**
  * Valida un RFC
  *
  * @param string $rfc a validar
  * @return multiple int 1 si el $rfc es valido 0 si no. boolean FALSE si sucede un error.
  * @link http://php.net/manual/en/function.preg-match.php
  */
  public static function validarRFC($rfc)
  {
    $regex = '/^[A-Z]{4}([0-9]{2})(1[0-2]|0[1-9])([0-3][0-9])([ -]?)([A-Z0-9]{4})$/';
    return preg_match($regex, $rfc);
  }

  /**
   * Get Timbre Fiscal of FileXML
   * 
   * @var string File Name of XML
   */
  public static function getTimbreFiscal($nameFileXml)
  {
    $comprobante = self::getXML($nameFileXml);
    return $comprobante->complemento->TimbreFiscalDigital['UUID'];
  }

  /**
   * Get No Certificado SAT of FileXML
   * 
   * @var string File Name of XML
   */
  public static function getNoCertificadoSAT($nameFileXml)
  {
    $comprobante = self::getXML($nameFileXml);
    return $comprobante->complemento->TimbreFiscalDigital['NoCertificadoSAT'];
  }

  /**
   * Get SelloSAT of FileXML
   * 
   * @var string File Name of XML
   */
  public static function getSelloSAT($nameFileXml)
  {
    $comprobante = self::getXML($nameFileXml);
    return $comprobante->complemento->TimbreFiscalDigital['SelloSAT'];
  }

  /**
   * Get FechaTimbrado of FileXML
   * 
   * @var string File Name of XML
   */
  public static function getFechaTimbrado($nameFileXml)
  {
    $comprobante = self::getXML($nameFileXml);
    return $comprobante->complemento->TimbreFiscalDigital['FechaTimbrado'];
  }

  public static function getXML($nameFileXml)
  {
    return \CfdiUtils\Cfdi::newFromString(Storage::disk('xml')->get($nameFileXml))
    ->getQuickReader();
  }

  /**
   * Get CadenaOrigin of FileXML
   * 
   * @var string File Name of XML
   */
  public static function getCadenaOrigen($nameFileXml)
  {
    $xmlContent = Storage::disk('xml')->get($nameFileXml);

    $resolver = new XmlResolver();

    $location = $resolver->resolveCadenaOrigenLocation('3.3');

    $builder = new DOMBuilder();
    return $builder->build($xmlContent, $location);
  }
}