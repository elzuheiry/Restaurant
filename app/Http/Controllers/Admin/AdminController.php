<?php

namespace App\Http\Controllers\Admin;

use App\Class\GeneralSettings;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);   
    }

    // 
    public function index(GeneralSettings $settings)
    {
        return view('admin.dashboard.index', [
            'site_name' => $settings->site_name
        ]);
    }
}