<?php

namespace App\Services\Spotify\Endpoints;

trait HasAlbums {
    public function albums(): Albums {
        return new Albums();
    }
}