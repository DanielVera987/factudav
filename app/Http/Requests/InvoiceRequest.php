<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
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
            'serie' => ['required', 'string'],/*LISTO*/
            'folio' => ['required', 'string', 'max:255', 'unique:invoices,folio'], /*LISTO*/
            'way_to_pay_id' => ['required', 'numeric', 'max:255'],/*LISTO*/
            'currency_id' => ['required', 'numeric', 'max:255'],/*LISTO*/
            'payment_method_id' => ['required', 'numeric','max:255'],/*LISTO*/
            'usecfdi_id' => ['required', 'numeric', 'max:255'],/*LISTO*/
            'date' => ['required', 'date_format:Y-m-d\TH:i:s'],/*LISTO*/
            'customer_id' => ['required', 'numeric'],/*LISTO*/
            'detail' => ['required'],
            'detail.*.discount' => ['required', 'numeric'],
            'detail.*.amount' => ['required', 'numeric'],
            'detail.*.product_id' => ['required', 'numeric'],
            'detail.*.prodserv_id' => ['required', 'numeric'],
            'detail.*.unit_id' => ['required', 'numeric'],
            'detail.*.description' => ['required'],
            'detail.*.quantity' => ['required', 'numeric'],
            'detail.*.taxes' => [''],
            'detail.*.taxes.*.type' => ['required'],
            'detail.*.taxes.*.factor' => ['required'],
            'detail.*.taxes.*.tax' => ['required'],
            'detail.*.taxes.*.id' => ['required', 'numeric'],
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
            'way_to_pay_id.required' => 'La forma de pago es requerido',
            'currency_id.required' => 'El campo moneda es requerido',
            'payment_method_id.required' => 'El compo metodo de pago es requerido',
            'usecfdi_id.required' => 'El compo uso del cfdi es requerido',
            'customer_id.required' => 'El compo cliente es requerido',
            'detail.required' => 'Es necesario agregar minimo un concepto',
            'detail.*.discount.required' => 'El campo en el concepto descuento es requerido',
            'detail.*.amount.required' => 'El campo en el concepto precio es requerido',
            'detail.*.product_id.required' => 'El campo en el concepto producto/servicio es requerido',
            'detail.*.unit_id.required' => 'El campo en el concepto clave unidad es requerido',
            'detail.*.description.required' => 'El campo en el concepto descripción es requerido',
            'detail.*.quantity.required' => 'El campo en el concepto cantidad es requerido',
            'detail.*.taxes.*.type.required' => 'El campo en el impuesto tipo es requerido',
            'detail.*.taxes.*.factor.required' => 'El campo en el impuesto factor es requerido',
            'detail.*.taxes.*.tax.required' => 'El campo en el impuesto impuesto es requerido',
        ];
    }
}
