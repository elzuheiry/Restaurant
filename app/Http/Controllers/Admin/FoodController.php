<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\ImageManagerStatic as Image;


class FoodController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    public function index()
    {
        return view('admin.products.index', [
            'foods' => Food::all()
        ]);
    }


    public function create()
    {
        return view('admin.products.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255', Rule::unique('food', 'name')],
            'slug' => ['required', 'min:3', 'max:255', Rule::unique('food', 'slug')],
            'thumbnail' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'type_id' => ['required', Rule::exists('types', 'id')],
            'description' => ['required', 'min:3'],
            'price' => ['required', 'max:255'],
            'alias' => ['required', 'max:255'],
            'discount_type' => ['required'],
            'discount_value' => ['required', 'max:255'],
        ]);

        $file_extension = request('thumbnail')->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;

        Image::make(request("thumbnail"))->resize(250, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path('upload_files/foods/'. $file_name));

        $attributes['thumbnail'] = $file_name;

        Food::create($attributes);

        return redirect()->back()->with('success', 'The food was published successfully!');
    }


    public function edit(Food $food)
    {
        return view('admin.products.edit', [
            'food' => $food
        ]);
    }

    public function update(Food $food)
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255', Rule::unique('food', 'name')->ignore($food)],
            'slug' => ['required', 'min:3', 'max:255', Rule::unique('food', 'slug')->ignore($food)],
            'thumbnail' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'type_id' => ['required', Rule::exists('types', 'id')],
            'description' => ['required', 'min:3'],
            'price' => ['required', 'max:255'],
            'alias' => ['required', 'max:255'],
            'discount_type' => ['required'],
            'discount_value' => ['required', 'max:255'],
        ]);


        if(isset($attributes['thumbnail'])){
            
            Storage::disk('upload_files')->delete('/foods/' . $food->thumbnail);
            
            $file_extension = request('thumbnail')->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;

            Image::make(request("thumbnail"))->resize(250, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('upload_files/foods/'. $file_name));

            $attributes['thumbnail'] = $file_name;
        }

        $food->update($attributes);

        return redirect()->back()->with('success', 'The food was update successfully!');
    }

    public function destroy(Food $food)
    {
        $food->delete();
        return redirect()->back()->with('success', 'The food was delete successfully!');
    }
}