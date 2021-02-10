<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'bussine_id',
        'invoice_id',
        'product_id',
        'prodserv_id',
        'key_unit_id',
        'description',
        'quantity',
        'discount',
        'amount',  
    ];

    public function bussine() 
    {
        return $this->belongsTo(Bussine::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function product()
    {
        return $this->belongsTo(Detail::class);
    }

    public static function createDetail($invoiceId, $request)
    {
        foreach ($request['product_id'] as $key => $value) {
            Detail::create([
                'bussine_id' => \Auth::user()->bussine_id,
                'invoice_id' => $invoiceId,
                'product_id' => $value,
                'prodserv_id' => $request['prodserv_id'][$key],
                'key_unit_id' => $request['key_unit_id'][$key],
                'description' => $request['description'][$key],
                'quantity' => $request['quantity'][$key],
                'discount' => $request['discount'][$key],
                'amount' => $request['amount'][$key]
            ]);
        }
    }

    public static function updateDetail($invoiceId, $request)
    {
        Invoice::with('detail')->findOrFail($invoiceId);

        
    }
}
