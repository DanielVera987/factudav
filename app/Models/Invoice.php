<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'bussine_id',
        'folio',
        'way_to_pay',
        'currency_id',
        'payment_method_id',
        'usecfdi_id',
        'date',
        'customer_id',
    ];

    public function bussine() 
    {
        return $this->belongsTo(Bussine::class);
    }

    public function detail()
    {
        return $this->hasMany(Detail::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}