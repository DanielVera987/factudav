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
        $folio = str_pad($count + 1, 10, '0', STR_PAD_LEFT);

        if ($count > 0) {
            if(self::isExistsFolio($folio)) {
                $folio = str_pad(self::isExistsFolio($folio), 10, '0', STR_PAD_LEFT);
            }
        }

        return $folio;
    }

    public static function isExistsFolio($folio)
    {
        $isExists = Product::where('bussine_id', Auth::user()->bussine_id)->where('code', $folio)->count();

        if ($isExists > 0) {
            $codeLast = Product::orderBy('id', 'DESC')->where('bussine_id', Auth::user()->bussine_id)->select('code')->take(1)->get();
            return intval($codeLast[0]->code) + 1;
        }

        return false;
    }
}
