<?php

namespace App\Http\Controllers;

use Attribute;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('products.index');
    }

    public function store()
    {
        $attributes = request()->validate([
            'the_size' => ['required'],
            'additions' => ['required'],
            'notes' => ['required'],
        ]);

        Image::make(request("thumbnail"))->resize(250, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path('upload_files/cart/'. $attributes['thumbnail']));

        
    }
}