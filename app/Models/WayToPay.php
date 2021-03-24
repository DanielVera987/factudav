<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WayToPay extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code'
    ];

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }

    public function complementpay()
    {
        return $this->hasMany(ComplementPay::class);
    }
}
