<?php

namespace App\Http\Controllers\Admin;

use App\Class\GeneralSettings;
use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TypeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }


    public function index(GeneralSettings $settings)
    {
        return view('admin.types.index', [
            'types' => Type::latest()->paginate(20)
        ]);
    }

    public function create()
    {
        return view('admin.types.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3', Rule::unique('types', 'name')],
            'slug' => ['required', 'min:3', Rule::unique('types', 'slug')],
        ]);

        Type::create($attributes);

        return redirect()->back()->with('success', 'The Type was published successfully!');
    }

    public function edit(Type $type)
    {
        return view('admin.types.edit', [
            'type' => $type
        ]);
    }

    public function update(Type $type)
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3', Rule::unique('types', 'name')->ignore($type)],
            'slug' => ['required', 'min:3', Rule::unique('types', 'slug')->ignore($type)],
        ]);

        $type->update($attributes);

        return redirect()->back()->with('success', 'The Type was update successfully!');
    }

    public function destroy(Type $type)
    {
        $type->delete();
        
        return redirect()->back()->with('success', 'The Type was delete successfully!');
    }

}