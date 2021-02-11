<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'bussine_id',
        'bussine_name',
        'tradename',
        'rfc',
        'email',
        'telephone',
        'usecfdi_id',
        'country_id',
        'state_id',
        'municipality_id',
        'location',
        'street',
        'colony',
        'zip',
        'no_exterior',
        'no_inside',
        'street_reference',
        'type', //1 cliente, 2 proveedor
    ];

    public function country() 
    {        
        return $this->belongsTo(Country::class);
    }

    public function state() 
    {        
        return $this->belongsTo(State::class);
    }

    public function usecfdi()
    {
        return $this->belongsTo(Usecfdi::class);
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}
