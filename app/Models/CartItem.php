<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}