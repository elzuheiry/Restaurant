<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guared = [];

    public function client()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}