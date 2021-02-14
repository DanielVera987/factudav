<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    public function detail()
    {
        return $this->hasMany(Detail::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
