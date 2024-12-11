<?php

namespace App\Services\Spotify\Entities;

class AlbumGet {

    public string $id;
    public string $name;
    public string $image;
    public array $artists;
    public array $songs;
    public string $year;
    public string $description;

    public function __construct(array $data)
    {
        $this->id = data_get($data, 'id', 'Unknown Id');
        $this->name = data_get($data, 'name', 'Unknown Name');
        $this->image = data_get($data, 'images.0.url', '');
        $this->artists = collect(data_get($data, 'artists', []))
                        ->map(fn($artist) => [
                            'id' => data_get($artist, 'id', 'Unknown Artist Id'),
                            'name' => data_get($artist, 'name', 'Unknown Artist Name')
                        ])
                        ->toArray();
        $this->songs = collect(data_get($data, 'tracks.items', 'Unknown Song Id'))
                          ->pluck('id', 'name')
                          ->toArray();
        $date = data_get($data, 'release_date', 'Unknown Release Date');
        $parts = explode("-", $date);
        $this->year = reset($parts);
        $this->description = 'No Description';
    }
}