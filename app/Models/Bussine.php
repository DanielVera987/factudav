<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bussine extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'bussine_name',
        'tradename',
        'rfc',
        'email',
        'telephone',
        'type_person',
        'taxregime_id',
        'country_id',
        'state_id',
        'municipality_id',
        'location',
        'street',
        'colony',
        'zip',
        'no_exterior',
        'no_inside',
        'certificate',
        'key_private',
        'password',
        'name_pac',
        'password_pac',
        'logo'
    ];

    public function User() {
        return $this->hasOne(User::class);
    }

    public function Country() {
        return $this->belongsTo(Country::class);
    }
}
