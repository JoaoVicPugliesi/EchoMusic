<?php

namespace App\Services\Spotify\Entities;

class SongSearch {

    public string $id;
    public string $name;
    public string $image;
    public string $album;
    public array $artists;
    
    public function __construct(array $data)
    {
        $this->id = data_get($data, 'id', 'Unknown Id');
        $this->name = data_get($data, 'name', 'Unknown Name');
        $this->image = data_get($data, 'albumOfTrack.coverArt.sources.0.url', '');
        $this->album = data_get($data, 'albumOfTrack.name', 'Unknown Album');
        $this->artists = collect(data_get($data, 'artists.items', []))
                        ->pluck('profile.name')
                        ->toArray();
    }
}