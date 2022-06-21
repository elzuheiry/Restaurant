<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Food;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    public function show(Food $food)
    {
        return view('products.index', [
            'food' => $food
        ]);
    }

    public function store(Food $food)
    {
        $attributes = request()->validate([
            'sizes' => ['required'],
            'additions' => ['required'],
            'notes' => ['required'],
            'quantity' => ['required']
        ]);

        $attributes['user_id'] = auth()->user()->id;
        $attributes['food_id'] = $food->id;

        $quantity = $attributes['quantity'];
        $price = $food->price;
        $subTotal = $price * $quantity;

        $attributes['subTotal'] = $subTotal;
        
        CartItem::create($attributes);
        return redirect()->route('cart.index');
    }
}