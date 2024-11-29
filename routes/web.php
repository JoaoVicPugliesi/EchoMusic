<?php

use App\Http\Controllers\ComposeController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::controller(LibraryController::class)->group(function() {
    Route::get('/library', 'index');
});

Route::controller(ComposeController::class)->group(function() {
    Route::get('/compose', 'index');
});

Route::controller(ProfileController::class)->group(function() {
    Route::get('/profile', 'index');
});






