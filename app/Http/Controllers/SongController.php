<?php

namespace App\Http\Controllers;

use App\Models\Song;

class SongController extends Controller
{
    public function index() {
        return view('library.songs');
    }

    public function search() {
        $songs = Song::query()->with('artist')->where('name', 'LIKE', '%'.request('q').'%')->paginate(10);

        return view('library.results', ['songs' => $songs ?? '']);
    }

    public function show($song) {
        $song = Song::query()->with('artist', 'album')->findOrFail($song);

        return view('library.show', ['data' => $song, 'type' => 'song']);
    }

    public function play($song) {

        $song = Song::query()->with('artist', 'album')->findOrFail($song);

        return view('library.play', ['song' => $song]);
    }

}
