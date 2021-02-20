<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'bussine_name' => 'required|string|max:255',
            'tradename' => 'required|string|max:255',
            'rfc' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:customers',
            'telephone' => 'required|string',
            'usecfdi_id' => 'required|numeric',
            'country_id' => 'required|numeric',
            'state_id' => 'required|numeric',
            'municipality_id' => 'required|numeric',
            'location' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'colony' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'no_exterior' => 'required|string|max:255',
            'no_inside' => 'required|string|max:255',
            'street_reference' => 'string|max:255'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'bussine_name.required'     => 'El campo Razón Social es obligatorio.',
            'tradename.required'        => 'El campo Nombre Comercial es obligatorio.',
            'rfc.required'              => 'El campo RFC es obligatorio.',
            'email.required'            => 'El campo Email es obligatorio.',
            'telephone.required'        => 'El campo Telefono es obligatorio.',
            'usecfdi_id.required'       => 'El campo Uso de CFDI es obligatorio.',
            'country_id.required'       => 'El campo País es obligatorio.',
            'state_id.required'         => 'El campo Estado es obligatorio.',
            'municipality_id.required'  => 'El campo Municipio es obligatorio.',
            'location.required'         => 'El campo Localidad es obligatorio.',
            'street.required'           => 'El campo Calle es obligatorio.',
            'colony.required'           => 'El campo Colonia es obligatorio.',
            'zip.required'              => 'El campo Código Postal es obligatorio.',
            'no_exterior.required'      => 'El campo No. Exterior es obligatorio.',
            'no_inside.required'        => 'El campo No. Interior es obligatorio.',
            'street_reference.required' => 'El campo Referencias de domicilio es obligatorio.',
        ];
    }
}
