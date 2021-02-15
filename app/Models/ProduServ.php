<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduServ extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'start_date_validity',
        'end_date_validity',
        'similarwords',
    ];

    public function detail()
    {
        return $this->hasMany(Detail::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
