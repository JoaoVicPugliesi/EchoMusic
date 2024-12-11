<?php

namespace App\Services\Spotify\Endpoints;

use App\Services\Spotify\Entities\ArtistAlbums;
use App\Services\Spotify\Entities\ArtistGet;
use App\Services\Spotify\Entities\ArtistSearch;
use App\Services\Spotify\SpotifyService;
use Illuminate\Support\Collection;

class Artists {

    protected $service;

    public function __construct()
    {
        $this->service = new SpotifyService;
    }

    public function search($query):Collection {
        $response = $this->service
        ->api
        ->withoutVerifying()
        ->get('/search', [
            'type' => 'artists',
            'offset' => '0',
            'limit' => '20',
            'q' => $query
        ]);

        $artists = $response->json()['artists']['items'] ?? [];

        return collect($artists)
        ->map(fn ($artist) => new ArtistSearch($artist['data'] ?? []));
    }

    public function get($artist) {
        $response = $this->service
        ->api
        ->withoutVerifying()
        ->get('/artists', [
            'ids' => $artist
        ]);

        $artist = $response->json()['artists']['0'] ?? [];

        return new ArtistGet($artist);
    }

    public function getAlbums($artist) {
        $response = $this->service
        ->api
        ->withoutVerifying()
        ->get('/artist_albums', [
            'id' => $artist,
            'offset' => '0',
            'limit' => '100'
        ]);

        $albumItems = $response->json()['data']['artist']['discography']['albums']['items'] ?? [];

        $albums = collect($albumItems)
            ->flatMap(fn($item) => $item['releases']['items'] ?? [])
            ->unique('name')
            ->values();
    
        return $albums->map(fn($album) => new ArtistAlbums($album));
    }
}