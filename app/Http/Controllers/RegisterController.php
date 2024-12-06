<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'name' => ['required', 'min:3', 'max:16', 'unique:users,name'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', Password::min(6), 'max:20', 'confirmed'],
        ]);

        $attributes['name'] = trim($attributes['name']);
        $attributes['email'] = trim($attributes['email']);

        $user = User::create([
            'name' => $attributes['name'],
            'email' => $attributes['email'],
            'password' => $attributes['password'],
            'description' => fake()->paragraph(),
        ]);

        if(!$user) {
            return throw ValidationException::withMessages([
                'name' => '',
                'email' => '',
                'password' => ''
            ]);
        }

        Auth::login($user);

        return redirect('/');
    }
}
