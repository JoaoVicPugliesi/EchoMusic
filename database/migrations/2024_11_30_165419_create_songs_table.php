<?php

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Artist::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Album::class)->nullable();
            $table->string('name', '50');
            $table->text('lyrics')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
