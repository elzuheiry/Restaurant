<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        return view('admin.orders.index', [
            'orders' => Order::latest()->paginate(10)
        ]);
    }

    public function edit(Order $order)
    {
        $order->update([
            'order_status' => 'Delivered'
        ]);

        return redirect()->back()->with('success', 'تم تعديل الطلب');
    }
}