<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplementPay extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'invoice_pay_id',
        'no_parciality',
        'amount_prev',
        'amount_paid',
        'amount_unpaid'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }  
}
