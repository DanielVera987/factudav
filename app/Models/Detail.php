<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'bussine_id',
        'invoice_id',
        'discount',
        'amount',  
        'product_id',
        'produserv_id',
        'unit_id',
        'description',
        'quantity',
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

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function produserv()
    {
        return $this->belongsTo(ProduServ::class);
    }

    public function tax()
    {
        return $this->belongsToMany(Tax::class, 'tax_details');
    }

    public static function createDetail($invoiceId, $request)
    {
        foreach ($request['detail'] as $key => $value) {
            $detail = Detail::create([
                'bussine_id' => Auth::user()->bussine_id,
                'invoice_id' => $invoiceId,
                'discount' => $value['discount'],
                'amount' => $value['amount'],
                'product_id' => $value['product_id'],
                'produserv_id' => $value['prodserv_id'],
                'unit_id' => $value['unit_id'],
                'description' => $value['description'],
                'quantity' => $value['quantity'],
            ]);

            if(isset($value['taxes'])){   
                foreach ($value['taxes'] as $key => $value) {
                    TaxDetail::create([
                        'detail_id' => $detail->id,
                        'tax_id' => $value['id']
                    ]);
                }
            }
        }
    }

    public static function updateDetail($invoiceId, $request)
    {
        foreach ($request as $key => $value) {
            if (isset($data['details_id'])) {
                $detail = Detail::findOrFile($data['details_id']);
            }
        }
        Invoice::with('detail')->findOrFail($invoiceId);       
    }
}
