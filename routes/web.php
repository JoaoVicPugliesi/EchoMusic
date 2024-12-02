<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ComposeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\NewUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

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

Route::controller(NewUserController::class)->middleware('guest')->group(function() {
    Route::get('/register', 'create');
    Route::post('/register', 'store');
});

Route::controller(SessionController::class)->group(function() {
    Route::middleware('guest')->group(function() {
        Route::get('/login', 'create')->name('login');
        Route::post('/login', 'store');
    });

    Route::delete('/logout', 'destroy')->middleware('auth');
});

Route::controller(ArtistController::class)->middleware('auth')->group(function() {
    Route::get('/library/artists', 'index');
    Route::get('/library/search/artists', [SearchController::class, 'searchArtists']);
    Route::get('/library/artists/{artist}/info', [InfoController::class, 'artistInfo']);
});


Route::controller(AlbumController::class)->middleware('auth')->group(function() {
    Route::get('/library/albums', 'index');
    Route::get('/library/search/albums', [SearchController::class, 'searchAlbums']);
    Route::get('/library/albums/{album}/info', [InfoController::class, 'albumInfo']);
});

Route::controller(SongController::class)->middleware('auth')->group(function() {
    Route::get('/library/songs', 'index');
    Route::get('/library/search/songs', [SearchController::class, 'searchSongs']);
    Route::get('/library/songs/{song}/info', [InfoController::class, 'songInfo']);
});




