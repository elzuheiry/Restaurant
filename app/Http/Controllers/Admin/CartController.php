<?php

namespace App\Http\Controllers\Admin;

use App\Class\GeneralSettings;
use App\Http\Controllers\Controller;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['role:admin']);   
    }
    
    public function index(GeneralSettings $settings)
    {
        return view('admin.carts.index', [
            'carts' => CartItem::latest()->paginate(10),
        ]);
    }

    public function edit()
    {
        
    }
}