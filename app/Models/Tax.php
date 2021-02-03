<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tax extends Model
{
    use HasFactory;

    protected $fillable = [
        'bussine_id',
        'name',
        'tax',
        'type',
        'factor',
        'tasa'
    ];

    public function bussine()
    {
        return $this->belongsTo(Bussine::class);
    }

    public static function isTax($request, $bussine_id) 
    {
        if (isset($request->name_tax)) {
            self::add_tax($request, $bussine_id);
        }
    } 

    public static function add_tax($request, $bussine_id)
    {
        for($i = 0; $i < count($request->name_tax); $i++) {
            Tax::create([
                'bussine_id' => $bussine_id,
                'name' => $request->name_tax[$i] ?? 'NaN',
                'tax' => $request->tax_tax[$i] ?? 'NaN',
                'type' => $request->type_tax[$i] ?? 'NaN',
                'factor' => $request->factor_tax[$i] ?? 'NaN',
                'tasa' => $request->tasa_tax[$i] ?? 'NaN'
            ]);
        }
    }
}
