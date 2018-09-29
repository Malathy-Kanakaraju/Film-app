<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/films');
});

Auth::routes();

Route::get('/home', function () {
    return redirect('/films');
});

Route::get('/films', 'FilmController@showAllFilms');

Route::get('/getFilm/{film_slug}', 'FilmController@getFilm');

Route::post('/add-comment', ['middleware' => 'auth', 'uses' => 'FilmController@addComment']);

Route::get('/films/create', ['middleware' => 'auth', 'uses' => 'FilmController@showCreateForm']);

Route::post('/create-film', ['middleware' => 'auth', 'uses' => 'FilmController@createFilm']);

