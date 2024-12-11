<?php

namespace App\Services\Spotify\Endpoints;

use App\Services\Spotify\Entities\AlbumGet;
use App\Services\Spotify\Entities\AlbumSearch;
use App\Services\Spotify\Entities\AlbumTracksGet;
use App\Services\Spotify\SpotifyService;
use Illuminate\Support\Collection;

class Albums {

    protected $service;

    public function __construct()
    {
        $this->service = new SpotifyService();
    }

    public function search($query):Collection {
        $response = $this->service
        ->api
        ->withoutVerifying()
        ->get('/search', [
            'type' => 'albums',
            'offset' => '0',
            'limit' => '20',
            'q' => $query
        ]);

        $albums = $response->json()['albums']['items'] ?? [];

        return collect($albums)
        ->map(fn ($album) => new AlbumSearch($album['data'] ?? []));
    }

    public function get($album) {
        $response = $this->service
        ->api
        ->withoutVerifying()
        ->get('/albums', [
            'ids' => $album
        ]);

        $album = $response->json()['albums']['0'] ?? [];

        return new AlbumGet($album);
    }

    public function getTracks($album) {
        $response = $this->service
        ->api
        ->withoutVerifying()
        ->get('/album_tracks', [
            'id' => $album,
            'offset' => 0,
            'limit' => 100
        ]);

        $songs = $response->json()['data']['album']['tracks']['items'] ?? [];

        return collect($songs)
        ->map(fn($song) => new AlbumTracksGet($song ?? []));
    }
}