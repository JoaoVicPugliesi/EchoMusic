<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function show($user) {

        $user = User::query()->with('playlists')->findOrFail($user);

        $auth = Auth::user();

        return view('compose.userinfo', ['user' => $user, 'auth' => $auth]);
    }


    public function showLibrary($user) {
        $playlists = Playlist::query()->with('user')->where('user_id', $user)->get();

        return view('compose.userlibrary', ['playlists' => $playlists]);
    }

    public function edit() {

        $user = Auth::user();

        return view('profile.edit', ['user' => $user]);
    }


    public function update(Request $request) {

        $attributes = $request->validate([
            'name' => ['required', 'min:3', 'max:16', Rule::unique('users', 'name')->ignore(Auth::id())],
            'description' => ['nullable', 'max:200']
        ]);

        $user = User::findOrFail(Auth::user()->id);

        $user->update([
            'name' => $attributes['name'],
            'description' => $attributes['description']
        ]);

        return redirect('/profile');
    }
}
