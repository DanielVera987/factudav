<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'detail_id',
        'tax_id'
    ];

    public function detail()
    {
        return $this->belongsToMany(Detail::class, 'tax_details');
    }

    public function tax()
    {
        return $this->belongsTo(Tax::class);
    }
}
