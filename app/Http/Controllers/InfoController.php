<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Song;

class InfoController extends Controller
{
    public function artistInfo($artistId) {

        $artist = Artist::query()->with('songs', 'albums')->findOrFail($artistId);

        return view('library.info', ['data' => $artist, 'type' => 'artist']);
    }

    public function songInfo($songId) {
        $song = Song::query()->with('artist', 'album')->findOrFail($songId);

        return view('library.info', ['data' => $song, 'type' => 'song']);
    }

    public function albumInfo($albumId) {
        $album = Album::query()->with('songs', 'artist')->findOrFail($albumId);

        return view('library.info', ['data' => $album, 'type' => 'album']);
    }
}
