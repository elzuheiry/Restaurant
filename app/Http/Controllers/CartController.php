<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //
    public function index()
    {
        return view('cart.index', [
            'carts' => CartItem::where('user_id', Auth::id())->get(),
            'total' => CartItem::where('user_id', Auth::id())->sum('subTotal')
        ]);
    }

    public function store()
    {
        CartItem::where('user_id', Auth::id())->delete();
        
        Order::create([
            'user_id' => Auth::id(),
            'subTotal' => request('subTotal'),
            'shippingFee' => request('shippingFee'),
            'total' => request('total'),
        ]);

        return redirect()->route('index');
    }

    public function destroy(CartItem $cart)
    {
        $cart->delete();
        return redirect()->back()->with('success', 'تم حذف الطلب بنجاح');
    }
}