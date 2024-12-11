<?php

namespace App\Services\Spotify\Endpoints;

trait HasSongs {
    public function songs(): Songs {
        return new Songs();
    }
}