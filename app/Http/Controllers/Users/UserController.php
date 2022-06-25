<?php

namespace App\Http\Controllers\Users;

use App\Class\GeneralSettings;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(GeneralSettings $settings)
    {
        return view('users.index');
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:3', 'max:255', Rule::unique('users', 'username')->ignore($user)],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user)]
        ]);

        if(request('phone')){
            $attributes['phone'] = request('phone');
        }

        if(request('address')){
            $attributes['address'] = request('address');
        }

        $user->update($attributes);

        return redirect()->back()->with('success', 'تم تحديث البيانات');
    }
}