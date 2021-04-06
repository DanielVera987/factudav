<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name',
        'abbreviation'
    ];

    public function bussine() {
        return $this->hasMany(Bussine::class);
    }

    public function country() 
    {
        return $this->belongsTo(Country::class);
    }

    public function municipality()
    {
        return $this->hasMany(Municipality::class);
    }

    public function customer() 
    {
        return $this->belongsTo(Customer::class);
    }
}
