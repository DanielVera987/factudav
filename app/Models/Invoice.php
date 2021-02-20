<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'bussine_id',
        'folio',
        'way_to_pay_id',
        'currency_id',
        'payment_method_id',
        'usecfdi_id',
        'date',
        'customer_id',
    ];

    public function bussine() 
    {
        return $this->belongsTo(Bussine::class);
    }

    public function detail()
    {
        return $this->hasMany(Detail::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function usecfdi()
    {
        return $this->belongsTo(Usecfdi::class);
    }

    public function paymentmethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function waytopay()
    {
        return $this->belongsTo(WayToPay::class);
    }

    public static function getAmountInvoice($invoice_id) {
        $details = Detail::select('quantity', 'amount')->where('invoice_id', $invoice_id)->get();
        $sumaAmount = 0;
        foreach ($details as $value){
            $sumaAmount += intval($value->quantity) * $value->amount;
        }

        return round($sumaAmount, 2);
    }
}
