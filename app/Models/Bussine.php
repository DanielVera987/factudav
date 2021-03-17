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
        'production_pac',
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

    public static function completeBussine(){
        $dataBussine = Bussine::find(\Auth::user()->bussine_id);
        $taxes = Tax::where('bussine_id', $dataBussine->id)->count();
        $curreny = Currency::where('bussine_id', $dataBussine->id)->count();
        $customer = Customer::where('bussine_id', $dataBussine->id)->count();
        $product = Product::where('bussine_id', $dataBussine->id)->count();
        $step1 = false;
        $step2 = false;
        $step3 = false;
        $step4 = false;
        $step5 = false;
        $step6 = false;

        $porcentage = 0;

        if($dataBussine->certificate && $dataBussine->key_private && $dataBussine->password){
            $porcentage += 17;
            $step1 = true;
        }

        if($dataBussine->name_pac && $dataBussine->password_pac){
            $porcentage += 17;
            $step2 = true;
        }

        if($taxes > 0){
            $porcentage += 17;
            $step3 = true;
        }

        if($curreny > 0){
            $porcentage += 17;
            $step4 = true;
        }

        if($customer > 0){
            $porcentage += 17;
            $step5 = true;
        }

        if($product > 0){
            $porcentage += 17;
            $step6 = true;
        }

        if($porcentage > 100){
            $porcentage = 100;
        }

        $data = [
            'total' => $porcentage,
            'step1' => $step1,
            'step2' => $step2,
            'step3' => $step3,
            'step4' => $step4,
            'step5' => $step5,
            'step6' => $step6
        ];
        return $data;
    }
}