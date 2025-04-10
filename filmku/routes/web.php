<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WatchedMovieController;

Route::get('/movies', [WatchedMovieController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
