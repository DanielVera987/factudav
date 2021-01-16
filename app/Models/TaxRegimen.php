<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxRegimen extends Model
{
    use HasFactory;

    public function bussine() {
        return $this->hasOne(Bussine::class);
    }
}
