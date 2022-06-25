<?php

namespace App\Http\Controllers\Admin;

use App\Class\GeneralSettings;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralSettingsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['role:admin']);   
    }
    
    public function show(GeneralSettings $settings){
        return view('admin.settings.index', [
            'site_name' => $settings->site_name,
            'site_active' => $settings->site_active,
            'the_tax' => $settings->the_tax,
            'delivery_price' => $settings->delivery_price
        ]);
    }

    public function edit(GeneralSettings $settings){
        return view('admin.settings.edit', [
            'site_name' => $settings->site_name,
            'site_active' => $settings->site_active,
            'the_tax' => $settings->the_tax,
            'delivery_price' => $settings->delivery_price
        ]);
    }

    public function update(GeneralSettings $settings)
    {
        $settings->site_name = request()->input('site_name');
        $settings->the_tax = request()->input('the_tax');
        $settings->delivery_price = request()->input('delivery_price');
        
        $settings->save();
        
        return redirect()->back();
    }
}