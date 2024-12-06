<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ComposeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Navbar Requests

Route::get('/', HomeController::class);

Route::controller(LibraryController::class)->middleware('auth')->group(function() {
    Route::get('/library', 'index');
});

Route::controller(ComposeController::class)->middleware('auth')->group(function() {
    Route::get('/compose', 'index');
});

Route::controller(ProfileController::class)->middleware('auth')->group(function() {
    Route::get('/profile', 'index');
});

// Register Requests

Route::controller(RegisterController::class)->middleware('guest')->group(function() {
    Route::get('/register', 'create');
    Route::post('/register', 'store');
});

// Login Requests

Route::controller(SessionController::class)->group(function() {
    Route::middleware('guest')->group(function() {
        Route::get('/login', 'create')->name('login');
        Route::post('/login', 'store');
    });
    Route::delete('/logout', 'destroy')->middleware('auth');
});

// Artist Requests

Route::controller(ArtistController::class)->middleware('auth')->group(function() {
    Route::get('/library/artists', 'index');
    Route::get('/library/search/artists', 'search');
    Route::get('/library/artists/{artist}/show', 'show');
    Route::get('/library/artist/{artist}/show', 'showLibrary');
});

// Album Requests

Route::controller(AlbumController::class)->middleware('auth')->group(function() {
    Route::get('/library/albums', 'index');
    Route::get('/library/search/albums', 'search');
    Route::get('/library/albums/{album}/show', 'show');
    Route::get('/library/album/{album}/songs', 'showSongs');
});

// Song Requests

Route::controller(SongController::class)->middleware('auth')->group(function() {
    Route::get('/library/songs', 'index');
    Route::get('/library/search/songs', 'search');
    Route::get('/library/songs/{song}/show', 'show');
    Route::get('/library/{song}/play', 'play');
});

// Playlist Requests

Route::controller(PlaylistController::class)->middleware('auth')->group(function() {
    Route::get('/compose/playlists', 'index');
    Route::get('/compose/search/playlists', 'search');
    Route::get('/compose/playlist/create', 'create');
    Route::post('/compose/playlists', 'store');
    Route::get('/compose/playlists/{playlist}/show', 'show')->name('playlists.show');
    Route::get('/compose/playlist/{playlist}/songs', 'showSongs');
    Route::delete('/compose/playlists/{playlist}/destroy', 'destroy');
});

Route::controller(UserController::class)->middleware('auth')->group(function() {
    Route::get('/compose/users/{user}/show', 'show');
    Route::get('/compose/user/{user}/show', 'showLibrary');
    Route::get('/profile/edit', 'edit');
    Route::patch('/profile/update', 'update');
});






