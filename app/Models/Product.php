<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'bussine_id',
        'code',
        'name',
        'description',
        'stock',
        'alert_stock',
        'cost',
        'price',
        'produserv_id',
        'unit_id',
        'image',
        'is_active'
    ];

    public function bussine() 
    {
        return $this->belongsTo(Bussine::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function detail()
    {
        return $this->hasMany(Detail::class);
    }

    public function produserv()
    {
        return $this->belongsTo(ProduServ::class);
    }

    public static function generateFolio()
    {
        $count = Product::where('bussine_id', Auth::user()->bussine_id)->count();
        $code = str_pad($count + 1, 10, '0', STR_PAD_LEFT);

        if ($count > 0) {
            if(!self::existsCode($code)) {
                return str_pad($code, 10, '0', STR_PAD_LEFT);
            }

            $codeLast = Product::orderBy('id', 'DESC')->where('bussine_id', Auth::user()->bussine_id)->select('code')->take(1)->get();
            $code = str_pad($codeLast[0]->code + 1, 10, '0', STR_PAD_LEFT);
        }

        return $code;
    }

    public static function existsCode($code) : bool
    {
        $isExists = Product::where('bussine_id', Auth::user()->bussine_id)->where('code', $code)->count();

        return ($isExists > 0) ? true : false;
    }
}
