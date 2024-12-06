<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Playlist extends Model
{

    use HasFactory;

    protected $table = 'playlists';

    protected $guarded = [];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function songs() : BelongsToMany {
        return $this->belongsToMany(Song::class);
    }
}
