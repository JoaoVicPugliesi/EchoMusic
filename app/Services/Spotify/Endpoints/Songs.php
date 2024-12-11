<?php

namespace App\Services\Spotify\Endpoints;

use App\Services\Spotify\Entities\SongGet;
use App\Services\Spotify\Entities\SongSearch;
use App\Services\Spotify\SpotifyService;
use Illuminate\Support\Collection;

class Songs {
    
     protected $service;

     public function __construct() {

          $this->service = new SpotifyService();
     }

     public function search($query):Collection {
        $response = $this->service
        ->api
        ->withoutVerifying()
        ->get('/search', [
            'type' => 'songs',
            'offset' => '0',
            'limit' => '20',
            'q' => $query
        ]);

        $songs = $response->json()['tracks']['items'] ?? [];

        return collect($songs)
        ->map(fn ($song) => new SongSearch($song['data'] ?? []));
     }

     public function get($id) {
          $response = $this->service
          ->api
          ->withoutVerifying()
          ->get('/tracks', [
               'ids' => $id
          ]);

          $song = $response->json()['tracks']['0'] ?? [];

          return new SongGet($song);
     }


}