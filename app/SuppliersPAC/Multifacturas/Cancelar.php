<?php 

namespace App\SuppliersPAC\Multifacturas;

use Illuminate\Support\Facades\Auth;

Class Cancelar
{
    /**
     * Client Soap
     *
     * @var \SoapClient
     */
    private $CLIENT;

    /**
     * Undocumented variable
     *
     * @var App\SuppliersPAC\Multifacturas\Config
     */
    private $CONFIG;

    /**
     * Module for Cancel
     *
     * @var string
     */
    private $MODULE = 'cancelacion2018';

    /**
     * Action for Cancel
     *
     * @var string
     */
    private $ACTION  = '';

    /**
     * UUDI for Cancel
     *
     * @var string
     */
    private $UUID = '';

    /**
     * Data Response of SoapClient
     *
     * @var string
     */
    public $STATUS = '';
    public $MESSAGE = '';
    public $ACUSE = '';
    public $CODIGO_RES_SAT = '';

    public function __construct(Config $config, $uuid, $action = 'cancelar')
    {
        $this->CONFIG = $config;
        $this->UUID = $uuid;
        $this->ACTION = $action;

        return $this->connectApi($action);
    }

    /**
     * Undocumented function
     *
     * @param [type] $action
     * @return \SoapClient
     */
    protected function connectApi($action)
    {   
        try{
            $this->CLIENT = new \SoapClient("http://pac1.multifacturas.com/{$this->MODULE}/?wsdl", [
                'trace' => 1,
                'use' => SOAP_LITERAL
            ]);

            $data = $this->data();
            return $this->$action($data);
        } catch (\SoapFault $e) {
            return dd($e->getMessage());
        }
    }

    protected function data()
    {
        $data = [];

        if($this->ACTION == 'cancelar' || $this->ACTION == 'consultar'){
            $data['usuario'] = $this->CONFIG->getUsuarioPac();
            $data['pass'] = $this->CONFIG->getPasswordPac();
        }else{
            $data['PAC']['usuario'] = $this->CONFIG->getUsuarioPac();
            $data['PAC']['pass'] = $this->CONFIG->getPasswordPac();
        }

        $data['accion']= $this->ACTION;                                                  
        $data["produccion"] = $this->CONFIG->getProduction();
        $data["rfc"] = Auth::user()->bussine->rfc;
        $data["uuid"]= $this->UUID;
        $data["password"]= $this->CONFIG->getPass();
        $data["b64Cer"]= $this->CONFIG->getFileCer();
        $data["b64Key"]= $this->CONFIG->getFileKey(); 

        return array('datos' => $data);
    }

    protected function cancelar($data)
    {
        $res = $this->CLIENT->__soapCall('cancelarCfdi', $data);
        $this->STATUS = $res->status;
        $this->ACUSE = $res->acuse;
        $this->MESSAGE = $res->mensaje_original;
        $this->CODIGO_RES_SAT = $res->codigo_respuesta_sat_texto_descripcion;

        return $res;
    }

    protected function aceptar($data)
    {
        $res = $this->CLIENT->__soapCall('aceptarCancelarCfdi', $data);
        return $res;
    }

    protected function rechazar($data)
    {
        $res = $this->CLIENT->__soapCall('aceptarCancelarCfdi', $data);
        return $res;
    }

    protected function consultar($data)
    {
        $res = $this->CLIENT->__soapCall('consultarCancelarCfdi', $data);
        return $res;
    }
}