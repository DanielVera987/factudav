<?php

namespace App\Http\Requests;

use App\Rules\RFC;
use Illuminate\Foundation\Http\FormRequest;

class ComplementPayRequest extends FormRequest
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
            'serie' => ['required', 'string'],
            'folio' => ['required', 'string'],
            'date' =>  ['required', 'date_format:Y-m-d\TH:i:s'],
            'currency_id' => ['required', 'numeric'],
            'type_vaucher' => ['required'],
            'way_to_pay_id' => ['required'],
            'date_pay' => ['required', 'date_format:Y-m-d\TH:i:s'],
            'amount' => ['required', 'numeric'],
            'num_operation' => [''],
            'rfc_payer' => [''],
            'account_payer' => [''],
            'rfc_beneficiary' => [''],
            'account_beneficiary' => ['']
        ];
    }

    public function messages()
    {
        return [
            'serie.required' => 'El campo serie es requerido',
            'folio.required' => 'El campo folio es requerido',
            'date.required' => 'El campo fecha es requerido',
            'currency_id.required' => 'El campo moneda es requerido',
            'type_vaucher' => 'El campo Tipo de Comprobante es requerido',
            'way_to_pay_id.required' => 'El campo Forma de Pago es requerido',
            'date_pay.required' => 'El campo Fecha de Pago es requerido',
            'date_pay.date_format' => 'El campo Fecha de Pago debe tener un formato YYYY-MM-DDTHH:MM:SS',
            'amount.required' => 'El campo monto es requerido',
            'amount.numeric' => 'El campo monto debe ser númerico',
        ];
    }
}
