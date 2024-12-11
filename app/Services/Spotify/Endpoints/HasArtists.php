<?php

namespace App\Services\Spotify\Endpoints;

trait HasArtists {
    public function artists(): Artists {
        return new Artists();
    }
}