<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function home() {
        $movie = Movie::all();
        return view('homepage', compact('movie'));
    }
}