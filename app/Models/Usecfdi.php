<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usecfdi extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code'
    ];

    public function customer()
    {
        return $this->hasMany(Customer::class);
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}
