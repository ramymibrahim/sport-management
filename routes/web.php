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
    return view('index');
});

// Route::get('/championships','ChampionshipController@index');
// Route::get('/championships/create','ChampionshipController@create');
// Route::post('/championships','ChampionshipController@store');
// Route::get('/championships/{id}','ChampionshipController@show');
// Route::get('/championships/{id}/edit','ChampionshipController@edit');
// Route::put('/championships/{id}','ChampionshipController@update');
// Route::delete('/championships/{id}','ChampionshipController@destroy');

Route::resource('championships', 'ChampionshipController');
Route::resource('events', 'EventController');
Route::resource('clubs', 'ClubController');
Route::resource('coaches', 'CoachController');

//Route::get('/events','Events@index');