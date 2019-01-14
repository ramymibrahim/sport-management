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

Route::get('/championships','Championships@index');
Route::get('/championships/create','Championships@create');
Route::post('/championships/store','Championships@store');
Route::get('/events','Events@index');