<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movies;

class MoviesController extends Controller
{
    public function index() {

        $movies = movies::all();
        @dump($movies);
        return view('movies', compact('movies'));
    }
}
