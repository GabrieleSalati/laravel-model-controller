<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;

class HomeController extends Controller
{
    public function index()
    {
        $movies = movie::all();
        dd($movies);
        return view("home", compact("movies"));
    }
}