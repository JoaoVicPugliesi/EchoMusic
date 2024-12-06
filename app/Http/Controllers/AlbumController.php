<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Song;

class AlbumController extends Controller
{
    public function index() {
        return view('library.albums');
    }

    public function search() {
        $albums = Album::query()->with('artist')->where('name', 'LIKE', '%'.request('q').'%')->paginate(10);

        return view('library.results', ['albums' => $albums ?? '']);
    }

    public function show($albumId) {
        $album = Album::query()->with('songs', 'artist')->findOrFail($albumId);

        return view('library.show', ['data' => $album, 'type' => 'album']);
    }

    public function showSongs($albumId) {
        $songs = Song::query()->with('artist')->where('album_id', $albumId)->get();

        return view('library.results', ['songs' => $songs]);
    }
}
