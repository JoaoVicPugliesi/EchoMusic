<?php

namespace App\Services\Spotify\Entities;

class ArtistSearch {
    
    public string $name;
    public string $image;
    public string $id;

    public function __construct(array $data)
    {
        $this->name = data_get($data, 'profile.name', 'Unknown Artist');
        $this->image = data_get($data, 'visuals.avatarImage.sources.0.url', '');
        $uri = data_get($data, 'uri', 'Unknown Id');
        $parts = explode(":", $uri);
        $this->id = end($parts);
    }
}