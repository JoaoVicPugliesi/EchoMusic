<?php

namespace App\Http\Controllers;

use App\Services\Spotify\SpotifyService;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

    public function index() {
        return view('library.albums');
    }

    public function search(Request $request) {

        // $albums = Album::query()->with('artist')->where('name', 'LIKE', '%'.request('q').'%')->paginate(10);
        // return view('library.results', ['albums' => $albums ?? '']);

        $query = '%'.$request->input('q').'%';
        $service = new SpotifyService;
        $albums = $service->albums()->search($query);
        $isSingles = [];

        foreach($albums as $album) {
            $albumDetails = $service->albums()->get($album->id);
        
            $isSingles[$album->id] = count($albumDetails->songs) === 1;
        }
    
        return view('library.results', ['albums' => $albums ?? '', 'isSingles' => $isSingles ?? []]);
    }

    public function show($album) {
        // $album = Album::query()->with('songs', 'artist')->findOrFail($albumId);

        // return view('library.show', ['data' => $album, 'type' => 'album']);

        $service = new SpotifyService();

        $album = $service->albums()->get($album);

        return view('library.show', ['data' => $album, 'type' => 'album']);
    }

    public function showSongs($album) {
        // $songs = Song::query()->with('artist')->where('album_id', $albumId)->get();

        $service = new SpotifyService;
        $songs = $service->albums()->getTracks($album);
        $album = $service->albums()->get($album);

        return view('library.results', ['songs' => $songs, 'album' => $album]);
    }
}
