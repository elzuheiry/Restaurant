<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Type;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('index', [
            'foods' => Food::latest()->get(),
            'types' => Type::all()
        ]);
    }

    public function menu()
    {
        return view('menu');
    }
}