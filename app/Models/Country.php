<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function bussine()
    {
        return $this->hasMany(Bussine::class);
    }

    public function state() 
    {
        return $this->hasMany(State::class);
    }
}
