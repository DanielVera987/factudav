<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeRelation extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name'
    ];

    public function relationdocs()
    {
        return $this->hasMany(RelationDocs::class);
    }
}
