<?php

namespace App\SuppliersPAC\Multifacturas;

/**
 * Class for configurate data Multifacturas
 */
Class Config 
{
    /**
     * Usuario PAC del usuario configurado
     *
     * @var string
     */
    private $USER_PAC = '';

    /**
     * Contraseña PAC del usuario configurado
     *
     * @var string
     */
    private $PASS_PAC = '';

    /**
     * Producción Puede tener valor NO para modo prueba y valor SI para producción
     * Default entorno NO pruebas
     * @var string
     */
    private $PRODUCTION_PAC = 'NO';
    
    /**
     * Archivo .cer.pem
     *
     * @var string
     */
    private $FILE_CER = '';

    /**
     * Archivo .key.pem
     *
     * @var string
     */
    private $FILE_KEY = '';

    /**
     * Contraseña para encriptar archivos .cer.pem y .key.pem
     *
     * @var string
     */
    private $PASS = '';

    /**
     * Configuración principal para Multifacturas
     *
     * @param string $user_pac
     * @param string $pass_pac
     * @param string $production_pac
     * @param string $file_cer [path]
     * @param string $file_key [path]
     * @param string $pass
     */
    public function __construct(
        string $user_pac,
        string $pass_pac,
        string $production_pac
    )
    {
        $this->USER_PAC = $user_pac;
        $this->PASS_PAC = $pass_pac;
        $this->PRODUCTION_PAC = $production_pac;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getUsuarioPac()
    {
        return $this->USER_PAC;   
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getPasswordPac()
    {
        return $this->PASS_PAC;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getProduction()
    {
        return $this->PRODUCTION_PAC;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getFileCer()
    {
        return $this->FILE_CER;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getFileKey()
    {
        return $this->FILE_KEY;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getPass()
    {
        return $this->PASS;
    }
}