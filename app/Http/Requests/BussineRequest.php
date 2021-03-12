<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BussineRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'bussine_name'      => 'required|string',
            'tradename'         => 'required|string',
            'rfc'               => 'required|string',
            'email'             => 'required|email',
            'telephone'         => 'required|numeric',
            'type_person'       => 'required|string',
            'taxregimen_id'     => 'required|numeric',
            'country_id'        => 'required|numeric',
            'state_id'          => 'required|numeric',       
            'municipality_id'   => 'required|numeric',
            'location'          => 'required|string',
            'street'            => 'required|string',      
            'colony'            => 'required|string',
            'zip'               => 'required|string',
            'no_exterior'       => 'required|string',
            'no_inside'         => 'required|string', 
            'start_serie'       => 'string',          
            'start_folio'       => 'string',          
            'certificate'       => 'required|max:2048', //file .cer
            'key_private'       => 'required|max:2048', //file .key
            'password'          => 'required|max:255', //Password for encrypt .key and .cer 
            'name_pac'          => 'max:255',
            'password_pac'      => 'max:255',
            'logo'              => 'image',
        ];
    }

    public function messages()
    {
        return [
            'bussine_name.required'     => 'El campo Razón Social  es obligatorio.',
            'tradename.required'        => 'El campo Nombre Comercial  es obligatorio.',
            'rfc.required'              => 'El campo RFC es obligatorio.',
            'email.required'            => 'El campo Correo Electrónico es obligatorio.',
            'telephone.required'        => 'El campo Teléfono  es obligatorio.',
            'type_person.required'      => 'El campo Tipo Persona es obligatorio.',
            'taxregimen_id.required'    => 'El campo Régimen Fiscal es obligatorio.',
            'country_id.required'       => 'El campo País es obligatorio.',
            'state_id.required'         => 'El campo Estado es obligatorio.',       
            'municipality_id.required'  => 'El campo Municipio es obligatorio.',
            'location.required'         => 'El campo Localidad es obligatorio.',
            'street.required'           => 'El campo Calle es obligatorio.',      
            'colony.required'           => 'El campo Colonia es obligatorio.',
            'zip.required'              => 'El campo Código Postal es obligatorio.',
            'no_exterior.required'      => 'El campo No. Exterior es obligatorio.',
            'no_inside.required'        => 'El campo No. Interior es obligatorio.',  
            'certificate.required'      => 'El campo Certificado es obligatorio',
            'key_private.required'      => 'El campo Llave Privada es obligario',
            'password.required'         => 'El campo Contraseña es obligario'
        ];
    }
}
