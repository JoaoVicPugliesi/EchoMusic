<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Song extends Model
{
    
    use HasFactory;

    protected $table = 'songs';
    protected $fillable = [
        'name',
        'lyrics'
    ];

    public function album() : BelongsTo {
        return $this->belongsTo(Album::class);
    }

    public function artist() : BelongsTo {
        return $this->belongsTo(Artist::class);
    }
}
