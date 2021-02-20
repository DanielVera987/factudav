<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bussine extends Model
{
    use HasFactory;

    protected $fillable = [
        'bussine_name',
        'tradename',
        'rfc',
        'email',
        'telephone',
        'type_person',
        'taxregimen_id',
        'country_id',
        'state_id',
        'municipality_id',
        'location',
        'street',
        'colony',
        'zip',
        'no_exterior',
        'no_inside',
        'start_serie',
        'start_folio',
        'certificate',
        'key_private',
        'password',
        'name_pac',
        'password_pac',
        'logo'
    ];

    public function user() {
        return $this->hasOne(User::class);
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }

    public function state() {
        return $this->belongsTo(State::class);
    }

    public function municipality() {
        return $this->belongsTo(Municipality::class);
    }

    public function taxregimen() {
        return $this->belongsTo(TaxRegimen::class);
    }

    public function tax()
    {
        return $this->hasMany(Tax::class);
    }

    public function currency()
    {
        return $this->hasMany(Currency::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function detail()
    {
        return $this->hasMany(Detail::class);
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}