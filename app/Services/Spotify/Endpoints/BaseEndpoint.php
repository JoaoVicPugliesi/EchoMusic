<?php

namespace App\Services\Spotify\Endpoints;

use App\Services\Spotify\SpotifyService;
use Illuminate\Support\Collection;

class BaseEndpoint
{
    protected SpotifyService $service;

    public function __construct()
    {
       $this->service = new SpotifyService;
    }

    protected function transform(mixed $json, string $entity):Collection {
        return collect($json)
        ->map(fn ($artist) => new $entity($artist));
    }
}