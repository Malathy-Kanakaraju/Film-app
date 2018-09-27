<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function showAllFilms() {
        $films = Film::all();
        
        return view('welcome')->with('films', $films);
    }
}
