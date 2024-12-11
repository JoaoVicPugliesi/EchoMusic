<?php

namespace App\Services\Spotify\Entities;

class ArtistAlbums {

    public string $id;
    public string $name;
    public string $image;
    public string $artist;

    public function __construct(array $data)
    {

        $uri = data_get($data, 'uri', 'Unknown Uri');
        $parts = explode(":", $uri);
        $this->id = end($parts);

        $this->name = data_get($data, 'name', 'Unknown Album Name');
        $this->image = data_get($data, 'coverArt.sources.0.url', '');

        $this->artist = data_get($data, 'artists.items.0.profile.name', 'Unknown Artist');
    }
}
