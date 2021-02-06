<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'tax_id',
        'image',
        'is_active'
    ];

    public function bussine() 
    {
        return $this->belongsTo(Bussine::class);
    }
}
