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
        'curp',
        'country_id',
        'state_id',
        'municipality_id',
        'location',
        'no_inside',
        'no_exterior',
        'zip',
        'colony',
        'street',
        'certificate',
        'key_certificate',
        'key_private',
        'name_pac',
        'password_pac',
        'logo'
    ];

    public function User() {
        return $this->hasOne(User::class);
    }
}
