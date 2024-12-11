<?php

namespace App\Services\Spotify\Entities;

class ArtistGet {

    public string $id;
    public string $name;
    public string $image;
    public string $description;

    public function __construct(array $data) {
        $uri = data_get($data, 'uri', 'Unknown Id');
        $parts = explode(":", $uri);
        $this->id = end($parts);
        $this->name = data_get($data, 'name', 'Unknown Name');
        $this->image = data_get($data, 'images.0.url', '');
        $this->description = 'No Description';
    }
}