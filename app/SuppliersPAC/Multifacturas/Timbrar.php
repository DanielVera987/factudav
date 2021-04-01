<?php 

namespace App\SuppliersPAC\Multifacturas;

use Illuminate\Support\Facades\Storage;

Class Timbrar
{
    /**
     * Parametros para configarcion multifacturas
     *
     * @var App\SuppliersPAC\Multifacturas\Config
     */
    public $PARAMS = '';

    /**
     * XML a Sellar
     *
     * @var string
     */
    public $XML = '';

    /**
     * Ruta a donde se va a guardar el CFDI Timbrado
     * Default public_path('storage/invoicexml/')
     * 
     * @var string
     */
    public $PATH_SAVE_CFDI = '';

    /**
     * Ruta del XML de Debug
     *
     * @var string
     */
    public $PATH_XML_DEBUG = '';

    public function __construct(
        Config $params, 
        $xml, 
        $path_save_cfdi = '', 
        $path_xml_debug = '')
    {
        $this->PARAMS = $params;
        $this->XML = $xml;
        $this->PATH_SAVE_CFDI = ($path_save_cfdi == '') ? storage_path('public/invoicexml/') : $path_save_cfdi;
        $this->PATH_XML_DEBUG = $path_xml_debug;
    }

    public function timbrar()
    {
        try {
            $client = new \SoapClient('http://pac1.multifacturas.com/pac/?wsdl', [
                'trace' => 1,
                'use' => SOAP_LITERAL
            ]);
            
            $params = [
                'rfc' => $this->PARAMS->getUsuarioPac(),
                'clave' => $this->PARAMS->getPasswordPac(),
                'xml' => base64_encode(Storage::disk('xml')->get($this->XML)),
                'produccion' => $this->PARAMS->getProduction(),
            ];

            $response = $client->__soapCall('timbrar33b64', $params);
            $codigo_int = (int)$response->codigo_mf_numero;
            if ($codigo_int != 0) {
                return ($response->codigo_mf_texto);
            }

            $fileName = str_replace('_UNSIGNED', '', $this->XML);
            $xml_timbrado = base64_decode($response->cfdi);
            Storage::disk('xml')->put($fileName ,$xml_timbrado);

            return false;
        } catch (\SoapFault $e) {
            return ($e->getMessage());
        }
    }
}