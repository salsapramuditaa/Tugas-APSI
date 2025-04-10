<?php

namespace App\Http\Controllers;

use App\Models\WatchedMovie;

class WatchedMovieController extends Controller
{
    public function index()
    {
        $movies = WatchedMovie::all();
        return view('watched_movies.index', compact('movies'));
    }
}