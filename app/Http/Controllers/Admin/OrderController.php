<?php

namespace App\Http\Controllers\Admin;

use App\Class\GeneralSettings;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['role:admin']);   
    }
    
    public function index(GeneralSettings $settings)
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