<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Song;
use App\Services\Spotify\SpotifyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    public function index() {
        return view('library.songs');
    }

    public function search(Request $request) {
        // $songs = Song::query()->with('artist')->where('name', 'LIKE', '%'.request('q').'%')->paginate(10);

        // return view('library.results', ['songs' => $songs ?? '']);

        $query = '%'.$request->input('q').'%';

        $service = new SpotifyService();

        $songs = $service->songs()->search($query);

        return view('library.results', ['songs' => $songs ?? '']);
    }

    public function show($song) {
        // $song = Song::query()->with('artist', 'album')->findOrFail($song);
        //return view('library.show', ['data' => $song, 'type' => 'song', 'user' => $user]);

        $user = Auth::user();

        $service = new SpotifyService();

        $song = $service->songs()->get($song);

        return view('library.show', ['data' => $song, 'type' => 'song', 'user' => $user]);
    }

    public function play($song) {

        // $song = Song::query()->with('artist', 'album')->findOrFail($song);

        $service = new SpotifyService();

        $song = $service->songs()->get($song);

        return view('library.play', ['song' => $song]);
    }

    public function add($song) {

        $song = Song::query()->findOrFail($song);

        $user = Auth::user();

        $playlists = Playlist::query()
                    ->with('user')
                    ->where('user_id', $user->id)
                    ->orderBy('created_at', 'desc')
                    ->get();

        return view('compose.userlibrary', ['playlists' => $playlists, 'song' => $song]);
    }

}
