<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    /*     * *************************************************************************
     *  Function to fetch all films
     * ************************************************************************ */

    public function showAllFilms() {
        $films = Film::all();

        return view('welcome')->with('films', $films);
    }

    /*     * *************************************************************************
     *  Function to fetch single film
     * ************************************************************************ */

    public function getFilm($film_slug) {
        $film = Film::with('comments')
                ->where('slug', '=', $film_slug)->first();

        return view('showFilm')->with('film', $film);
    }

}
