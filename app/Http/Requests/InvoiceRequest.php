<?php

namespace App\Http\Requests;

use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
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
            'serie'                     => ['required', 'string'],
            'folio'                     => ['required', 'string', 'unique:invoices,folio'],
            'way_to_pay_id'             => ['required', 'numeric'],
            'currency_id'               => ['required', 'numeric'],
            'payment_method_id'         => ['required', 'numeric'],
            'usecfdi_id'                => ['required', 'numeric'],
            'type_voucher'              => ['required', 'string'],
            'date'                      => ['required', 'date_format:Y-m-d\TH:i:s'],
            'customer_id'               => ['required', 'numeric'],
            'detail'                    => ['required'],
            'detail.*.discount'         => ['required', 'numeric'],
            'detail.*.amount'           => ['required', 'numeric'],
            'detail.*.product_id'       => ['required', 'numeric'],
            'detail.*.prodserv_id'      => ['required', 'numeric'],
            'detail.*.unit_id'          => ['required', 'numeric'],
            'detail.*.description'      => ['required'],
            'detail.*.quantity'         => ['required', 'numeric'],
            'detail.*.taxes'            => [''],
            'detail.*.taxes.*.type'     => ['required'],
            'detail.*.taxes.*.factor'   => ['required'],
            'detail.*.taxes.*.tax'      => ['required'],
            'detail.*.taxes.*.id'       => ['required', 'numeric'],
            'type_relation.*'           => [''],
            'uuid_rel.*'                => ['']
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
            'type_voucher.required'             => 'El campo Tipo de Comprante es requerido',
            'way_to_pay_id.required'            => 'La forma de pago es requerido',
            'currency_id.required'              => 'El campo moneda es requerido',
            'payment_method_id.required'        => 'El campo metodo de pago es requerido',
            'usecfdi_id.required'               => 'El campo uso del cfdi es requerido',
            'date.required'                     => 'El campo fecha es requerido',
            'date.date_format'                  => 'El campo fecha debe tener un formato YYYY-MM-DDTHH:MM:SS',
            'customer_id.required'              => 'El campo cliente es requerido',
            'detail.required'                   => 'Es necesario agregar minimo un concepto',
            'detail.*.discount.required'        => 'El campo en el concepto descuento es requerido',
            'detail.*.amount.required'          => 'El campo en el concepto precio es requerido',
            'detail.*.prodserv_id.required'     => 'El campo en el concepto producto/servicio es requerido',
            'detail.*.product_id.required'      => 'El campo en el concepto producto es requerido',
            'detail.*.unit_id.required'         => 'El campo en el concepto clave unidad es requerido',
            'detail.*.description.required'     => 'El campo en el concepto descripción es requerido',
            'detail.*.quantity.required'        => 'El campo en el concepto cantidad es requerido',
            'detail.*.taxes.*.type.required'    => 'El campo en el impuesto tipo es requerido',
            'detail.*.taxes.*.factor.required'  => 'El campo en el impuesto factor es requerido',
            'detail.*.taxes.*.tax.required'     => 'El campo en el impuesto impuesto es requerido',
            'detail.*.taxes.*.id.required'      => 'El campo en el impuesto id es requerido',
        ];
    }
}
