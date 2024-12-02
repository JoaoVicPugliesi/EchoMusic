<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class NewUserController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:16', 'unique:users,name'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', Password::min(6), 'max:20', 'confirmed']
        ]);

        $attributes['name'] = trim($attributes['name']);
        $attributes['email'] = trim($attributes['email']);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/');
    }
}
