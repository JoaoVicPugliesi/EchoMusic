<?php

namespace App\Services\Spotify\Entities;

class SongGet {

    public string $id;
    public string $albumId;
    public string $name;
    public string $image;
    public float $duration;
    public string $album;
    public array $artists;
    

    public function __construct(array $data) {
        $this->id = data_get($data, 'id', 'Unknown Id');
        $this->albumId = data_get($data, 'album.id', 'Unknown Album Id');
        $this->name = data_get($data, 'name', 'Unknown Song Name');
        $this->image = data_get($data, 'album.images.0.url', '');
        $durationMs = data_get($data, 'duration_ms', 0);
        $this->duration = round($durationMs / 60000, 2);
        $this->album = data_get($data, 'album.name', 'Unknown Album Name');
        $this->artists = collect(data_get($data, 'artists', []))
                        ->pluck('name')
                        ->toArray();
    }
}