<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'bussine_id',
        'customer_id',
        'folio',
        'way_to_pay_id',
        'currency_id',
        'payment_method_id',
        'usecfdi_id',
        'type_voucher',
        'name_file',
        'date',
        'cancel_date',
        'cancel_acuse',
        'cancel_status'
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

    public function relationdocs()
    {
        return $this->hasMany(RelationDocs::class);
    }

    public static function getAmountInvoice($invoice_id) {
        $details = Detail::select('quantity', 'amount')->where('invoice_id', $invoice_id)->get();
        $sumaAmount = 0;
        foreach ($details as $value){
            $sumaAmount += intval($value->quantity) * $value->amount;
        }

        return round($sumaAmount, 2);
    }

    public static function generateFolio()
    {
        $bussine_id = Auth::user()->bussine_id;
        $count = Invoice::where('bussine_id', $bussine_id)->count();
        
        if ($count > 0) {
            $folio = Invoice::where('bussine_id', $bussine_id)->orderBy('id', 'DESC')->take(1)->get();
            return str_pad($folio[0]->folio + 1, 10, '0', STR_PAD_LEFT);
        }

        $confFolio = Bussine::find($bussine_id);
        return str_pad($confFolio->start_folio, 10, '0', STR_PAD_LEFT);
    }
}
