<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'food';
    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}