<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplementPay extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoices_id',
        'serie',
        'folio',
        'date',
        'currency_id',
        'type_vaucher',
        'way_to_pay_id',
        'date_pay',
        'amount',
        'num_operation',
        'rfc_payer',
        'account_payer',
        'rfc_beneficiary',
        'account_beneficiary',
        'no_parciality'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function waytopay()
    {
        return $this->belongsTo(WayToPay::class);
    }
}
