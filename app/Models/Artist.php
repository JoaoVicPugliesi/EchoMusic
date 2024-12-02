<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    /** @use HasFactory<\Database\Factories\ArtistFactory> */
    use HasFactory;

    protected $table = 'artists';
    protected $fillable = [
        'name',
        'description',
        'logo',
    ];

    public function songs() : HasMany{
        return $this->hasMany(Song::class);
    }

    public function albums() : HasMany {
        return $this->hasMany(Album::class);
    }
}
