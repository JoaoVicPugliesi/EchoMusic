<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class PlaylistController extends Controller
{
    public function index() {
        return view('compose.playlists');
    }

    public function search() {
        $playlists = Playlist::query()->with('songs', 'user')->where('name', 'LIKE', '%'.request('q').'%')->get();

        return view('compose.playlistresults', ['playlists' => $playlists]);
    }

    public function show($playlist) {

        $playlist = Playlist::query()->with('songs', 'user')->findOrFail($playlist);
        $user = Auth::user();

        return view('compose.show', [
            'playlist' => $playlist,
            'user' => $user
        ]);
    }

    public function showSongs($playlist) {

        $playlist = Playlist::query()->with('songs')->findOrFail($playlist);

        $songs = $playlist->songs;

        return view('library.results', ['songs' => $songs]);
    }

    public function create() {
        return view('compose.playlistcreate');
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'name' => ['required', 'min:3', 'max:30'],
            'description' => ['nullable', 'max:200']
        ]);


        $playlist = Playlist::create([
            'user_id' => Auth::user()->id,
            'name' => $attributes['name'],
            'description' => $attributes['description'],
            'year' => now()->year
        ]);

        if(!$playlist) {
            return throw ValidationException::withMessages([]);
        }
        return redirect()->route('playlists.show', ['playlist' => $playlist->id]);
    }

    public function edit() {
        return '';
    }

    public function update() {
        return '';
    }
 
    public function destroy($playlist) {

        $playlist = Playlist::findOrFail($playlist);

        if($playlist->user->id === Auth::user()->id) {
            $playlist->delete();
            return redirect('/compose');
        }

        return abort(420);
    }
}
