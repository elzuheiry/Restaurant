<?php

namespace App\Http\Controllers;

use App\Class\GeneralSettings;
use App\Models\Food;
use App\Models\Type;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(GeneralSettings $settings)
    {
        return view('index', [
            'foods' => Food::latest()->get(),
            'types' => Type::all(),
        ]);
    }

    public function menu()
    {
        return view('menu');
    }
}