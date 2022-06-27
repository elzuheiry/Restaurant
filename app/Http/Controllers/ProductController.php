<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Food;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

        $quantity = $attributes['quantity'];
        $price = $food->price;
        $subTotal = $price * $quantity;

        if(Auth::id()){

            $attributes['user_id'] = Auth::id();
            $attributes['food_id'] = $food->id;
            $attributes['subTotal'] = $subTotal;
            
            CartItem::create($attributes);
            return redirect()->route('cart.index');

        }

        Session::push('foods', [
            'size' => $attributes['sizes'],
            'notes' => $attributes['notes'],
            'quantity' => $attributes['quantity'],
            'food_id' => $food->id,
            'subTotal' => $subTotal
        ]);
        
        // Session::forget('foods');
        return redirect()->route('cart.index');
    }
}