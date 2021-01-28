<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usecfdi extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
}
