<?php

namespace App\Services\Spotify\Entities;

class AlbumTracksGet {

    public string $id;
    public string $name;
    public string $image;
    public string $album;
    public array $artists;

    public function __construct(array $data)
    {
        $uri = data_get($data, 'track.uri', 'Unknown Uri');
        $parts = explode(":", $uri);
        $this->id = end($parts);
        $this->name = data_get($data, 'track.name', 'Unknown Name');
        $this->image = data_get($data, 'image', '');
        $this->album = data_get($data, 'track.album.name', 'Unknown Album Name');
        $this->artists = collect(data_get($data, 'track.artists.items', []))
                        ->pluck('profile.name')
                        ->toArray();
    }
}
