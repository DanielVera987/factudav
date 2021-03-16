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

    /**
     * Generate folio for product
     *
     * @return string $code
     */
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

    /**
     * Verify that the code exists
     * 
     * @param string $code
     * @return bool
     */
    public static function existsCode($code) : bool
    {
        $isExists = Product::where('bussine_id', Auth::user()->bussine_id)->where('code', $code)->count();

        return ($isExists > 0) ? true : false;
    }

    /**
     * Decrement the stock of product
     *
     * @param integer $id
     * @param integer $qty
     * @return void
     */
    public static function subtractStock($id, $qty)
    {
        $product = Product::where('bussine_id', Auth::user()->bussine_id)->findOrFail($id);
        $tmp = $product->stock - $qty;

        if ($product->stock > 0 && $tmp >= 0) {
            $product->stock = $tmp;
            $product->save();

            return true;
        }

        return false;
    }

    /**
     * Check which product reached its minimum stock
     *
     * @return bool
     */
    public static function checkMinStock() : bool
    {
        $alert = false;
        $products = Product::where('bussine_id', Auth::user()->bussine_id)->get();

        foreach($products as $product){
            if($product->stock <= $product->alert_stock){
                $alert = true;
            }
        }

        return $alert;
    }

    public static function getProductMinStock()
    {
        $productsName = [];
        $products = Product::where('bussine_id', Auth::user()->bussine_id)->get();

        foreach($products as $product){
            if($product->stock <= $product->alert_stock){
                array_push($productsName, [
                    'name' => $product->name,
                    'code' => $product->code,
                    'stock' => $product->stock
                ]);
            }
        }

        return $productsName;
    }
}
