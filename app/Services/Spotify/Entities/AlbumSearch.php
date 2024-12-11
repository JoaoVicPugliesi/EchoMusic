<?php

namespace App\Services\Spotify\Entities;

class AlbumSearch
{
    public string $id;
    public string $name;
    public string $image;
    public array $artists;
    public int $year;

    public function __construct(array $data)
    {
        $uri = data_get($data, 'uri', 'Unknown Album Id');
        $parts = explode(":", $uri);
        $this->id = end($parts);
        $this->name = data_get($data, 'name', 'Unknown Album');
        $this->image = data_get($data, 'coverArt.sources.0.url', '');

        $this->artists = collect(data_get($data, 'artists.items', []))
                        ->pluck('profile.name')
                        ->toArray();
        $this->year = data_get($data, 'date.year');
    }
}