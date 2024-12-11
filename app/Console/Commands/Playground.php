<?php

namespace App\Console\Commands;

use App\Services\Spotify\SpotifyService;
use Illuminate\Console\Command;

class Playground extends Command
{
    protected $signature = 'play';

    protected $description = 'Command description';

    public function handle(): int
    {
        $query = 'a';

        $service = new SpotifyService();

        $results = $service->albums()->get($query);

        dd($results);

        return Command::SUCCESS;
    }
}

