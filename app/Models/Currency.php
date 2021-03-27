<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        'bussine_id',
        'code',
        'name',
        'exchange_rate'
    ];

    public function bussine()
    {
        return $this->belongsTo(Bussine::class);
    }

    public function invoice()
    {
        return $this->hasMany(Currency::class);
    }

    public static function isCurrency($request, $bussine_id)
    {
        if (isset($request->name_currency)) self::add_currency($request, $bussine_id);
    }
    
    protected static function add_currency($request, $bussine_id)
    {
        for($i = 0; $i < count($request->name_currency); $i++) {
            Currency::create([
                'bussine_id' => $bussine_id,
                'name' => $request->name_currency[$i] ?? 'NaN',
                'code' => $request->code_currency[$i] ?? 'NaN',
                'exchange_rate' => $request->type_currency[$i] ?? 'NaN'
            ]);
        }
    }
}
