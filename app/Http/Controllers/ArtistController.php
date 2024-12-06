<?php

namespace App\Http\Controllers;

use App\Models\Artist;


class ArtistController extends Controller
{
    public function index() {
        return view('library.artists');
    }

    public function search() {
        $artists = Artist::query()->where('name', 'LIKE', '%'.request('q').'%')->paginate(10);

        return view('library.results', ['artists' => $artists ?? '']);
    }

    public function show($artistId) {
        $artist = Artist::query()->with('songs', 'albums')->findOrFail($artistId);

        return view('library.show', ['data' => $artist, 'type' => 'artist']);
    }

    public function showLibrary($artistId) {
        $artist = Artist::query()->with('albums')->findOrFail($artistId);

        return view('library.artistlibrary', ['artist' => $artist]);
    }
}
