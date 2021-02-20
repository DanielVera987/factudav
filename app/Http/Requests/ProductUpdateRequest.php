<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'code'          => ['required', 'string' ,'max:255'],
            'name'          => ['required', 'string', 'max:255'], 
            'description'   => ['required', 'string', 'max:255'],
            'stock'         => ['required', 'numeric', 'max:255'],
            'alert_stock'   => ['required', 'numeric', 'max:255'],
            'cost'          => ['required', 'numeric', 'max:255'],
            'price'         => ['required', 'numeric', 'max:255'],
            'produserv_id'  => ['required', 'numeric'],
            'unit_id'       => ['required', 'numeric'],
            'image'         => ['image'],
            'is_active'     => ['nullable']
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
            'code.required'         => 'El campo Code es obligatorio.',
            'name.required'         => 'El campo Nombre es obligatorio.',
            'description.required'  => 'El campo Descripción es obligatorio.',
            'cost.required'         => 'El campo Costo es obligatorio.',
            'price.required'        => 'El campo Precio es obligatorio.',
            'produserv_id.required' => 'El campo Producto/Servicio es obligatorio.',
            'unit_id.required'      => 'El campo Unidad de Medida es obligatorio.',
            'stock.required'        => 'El campo Stock es obligatorio.',
            'alert_stock.required'  => 'El campo Alerta Stock es obligatorio.',
            'image.required'        => 'El campo Imagen es obligatorio.'
        ];
    }
}
