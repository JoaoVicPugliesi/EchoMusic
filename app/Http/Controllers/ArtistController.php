<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Services\Spotify\SpotifyService;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index() {
        return view('library.artists');
    }

    public function search(Request $request) {

        // $artists = Artist::query()->where('name', 'LIKE', '%'.request('q').'%')->paginate(10);
        // return view('library.results', ['artists' => $artists ?? '']);

        $query = '%'.$request->input('q').'%';

        $service = new SpotifyService();

        $artists = $service->artists()->search($query);

        return view('library.results', ['artists' => $artists ?? '']);

    }

    public function show($artist) {
        // $artist = Artist::query()->with('songs', 'albums')->findOrFail($artistId);

        // return view('library.show', ['data' => $artist, 'type' => 'artist']);

        $service = new SpotifyService;

        $artist = $service->artists()->get($artist);

        return view('library.show', ['data' => $artist, 'type' => 'artist']);
    }

    public function showLibrary($artist) {

        // $artist = Artist::query()->with('albums')->findOrFail($artistId);

        // return view('library.artistlibrary', ['artist' => $artist]);

        $service = new SpotifyService;


        $albums = $service->artists()->getAlbums($artist);
        $artist = $service->artists()->get($artist);


        return view('library.artistlibrary', ['albums' => $albums, 'artist' => $artist]);
        
    }
}
