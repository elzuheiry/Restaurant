<?php

namespace App\Http\Controllers;

use App\Class\GeneralSettings;
use App\Models\CartItem;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    //
    public function index(GeneralSettings $settings)
    {
        if(Session::has('foods')){
            return view('cart.index', [
                'the_tax' => $settings->the_tax,
                'delivery_price' => $settings->delivery_price
            ]);
        }
        
        return view('cart.index', [
            'carts' => CartItem::where('user_id', Auth::id())->get(),
            'total' => CartItem::where('user_id', Auth::id())->sum('subTotal'),
            'the_tax' => $settings->the_tax,
            'delivery_price' => $settings->delivery_price
        ]);
    }

    public function getLocation()
    {
        return view('cart.map');
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