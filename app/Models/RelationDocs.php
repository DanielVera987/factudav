<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationDocs extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'type_relation_id',
        'uuid'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function typerelation()
    {
        return $this->belongsTo(TypeRelation::class);
    }
}
