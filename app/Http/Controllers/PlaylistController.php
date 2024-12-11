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

        $user = Auth::user();

        return view('compose.playlistsongs', ['songs' => $songs, 'playlist' => $playlist, 'user' => $user]);
    }

    public function remove($playlist, $song) {

        $playlist = Playlist::query()->findOrFail($playlist);
        $song = Song::query()->findOrFail($song);

        if($playlist->user_id !== Auth::user()->id) {
            abort(403, 'Unauthorized action.');
        }

        $playlist->songs()->detach($song);

        return redirect()->route('playlists.show', ['playlist' => $playlist]);
    }

    public function add($playlist, $song) {
        $playlist = Playlist::query()->findOrFail($playlist);
        $song = Song::query()->findOrFail($song);

        if ($playlist->songs()->where('song_id', $song->id)->exists()) {
            return redirect()
                ->route('playlist.showSongs', ['playlist' => $playlist])
                ->with('status', 'Song is already in the playlist.');
        }

        $playlist->songs()->attach($song);

        return redirect()->route('playlists.show', ['playlist' => $playlist]);
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

    public function edit($playlist) {

        $playlist = Playlist::query()->findOrFail($playlist);

        return view('compose.editplaylist', ['playlist' => $playlist]);
    }

    public function update(Request $request, $playlist) {

        $attributes = $request->validate([
            'name' => ['required', 'min:3', 'max:25'],
            'description' => ['nullable', 'max:200']
        ]);

        $playlist = Playlist::query()->findOrFail($playlist);

        $playlist->update([
            'name' => $attributes['name'],
            'description' => $attributes['description']
        ]);

        return redirect()->route('playlists.show', ['playlist' => $playlist]);
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
