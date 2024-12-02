<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Song;

class SearchController extends Controller
{
    public function searchArtists() {

        $artists = Artist::query()->where('name', 'LIKE', '%'.request('q').'%')->paginate(10);

        return view('library.results', ['artists' => $artists ?? '']);
    }

    public function searchAlbums() {

        $albums = Album::query()->with('artist')->where('name', 'LIKE', '%'.request('q').'%')->paginate(10);

        return view('library.results', ['albums' => $albums ?? '']);
    }

    public function searchSongs() {

        $songs = Song::query()->with('artist')->where('name', 'LIKE', '%'.request('q').'%')->paginate(10);

        return view('library.results', ['songs' => $songs ?? '']);
    }
}
