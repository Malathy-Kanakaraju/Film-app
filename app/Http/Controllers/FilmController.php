<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Comment;
use Validator;
use Log;
use Auth;
use Illuminate\Validation\Rule;

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
        $film = Film::with('comments', 'genres')
                        ->where('slug', '=', $film_slug)->first();

        return view('showFilm')->with('film', $film);
    }

    /*     * *************************************************************************
     *  Function to post new comment
     * ************************************************************************ */

    public function addComment(Request $request) {
        Log::info("input to addComment: ". print_r($request->all(), true));
        $validation_result = Validator::make($request->all(), [
                    'user_name' => 'required',
                    'comment' => 'required|max:100'
        ]);

        $film = Film::with('comments', 'genres')
                        ->where('id', '=', $request->film_id)->first();

        if ($validation_result->fails()) {
            $errors = $validation_result->errors();
            return view('showFilm', compact('film', 'errors'));
        }

        $comment = new Comment();
        $comment->film_id = $request->film_id;
        $comment->name = $request->user_name;
        $comment->comment = $request->comment;
        $comment->user_id = Auth::user()->id;
        $comment->created_by = Auth::user()->id;
        $comment->updated_by = Auth::user()->id;
        $comment->save();
        $film = Film::with('comments', 'genres')
                        ->where('id', '=', $request->film_id)->first();

        return view('showFilm')->with('film', $film);
    }

    /*     * *************************************************************************
     *  Function to show film creating form page
     * ************************************************************************ */

    public function showCreateForm() {
        return view('createFilm');
    }
    
    /*     * *************************************************************************
     *  Function to show film creating form page
     * ************************************************************************ */
    public function createFilm(Request $request) {
Log::info("input to createFilm: ". print_r($request->all(), true));
        $validation_result = Validator::make($request->all(), [
            'user_name' => 'required',
            'description' => 'required|max:255',
            'rating' => 'required',Rule::in([1,2,3,4,5]),
            'price' => 'required|numeric',
            'country' => 'required', Rule::in(['India', 'United States']),
            'genre.*' => 'required|exists:genres,id',
            'release_date' => 'required|bail|date|date_format:Y-m-d',
            'poster.*' => 'required|mimes:jpeg,jpg,png,gif|max:1024'
        ]);
        
        if($validation_result->fails()) {
            $errors = $validation_result->errors();
            Log::info("createFilm validation failed: ". print_r($validation_result->errors(), true));
            return view('createFilm', compact('errors'));
        }
        
        $film = new Film();
        $film->name = $request->user_name;
        $film->description = $request->description;
        $film->rating = $request->rating;
        $film->ticket_price = $request->price;
        $release_date = date_create($request->release_date);
        $film->release_date = date_format($release_date, 'Y-m-d');
        $film->country = $request->country;
        
//        foreach($film->poster as $photo) {
        $file_name = time() . '-' . preg_replace('/\s+/', '_', $request->poster->getClientOriginalName());
        $request->poster->move(public_path("/images/film-photos/"), $file_name);
        
        $film->photo = "/images/film-photos/".$file_name;
//        }
        $film->slug = str_slug($film->name);
        $film->created_by = Auth::user()->id;
        $film->updated_by = Auth::user()->id;
        $film->save();
        
        $film->genres()->sync($request->genres);
    }
}
