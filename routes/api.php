<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('movies', 'MovieController@index')->middleware('auth:api');

//List single Movie
Route::get('movie/{id}', 'MovieController@show')->middleware('auth:api');

//Create new movie
Route::post('movie', 'MovieController@store')->middleware('auth:api');

//Update movie
Route::put('movie', 'MovieController@store')->middleware('auth:api');

//Delete Movie
Route::delete('movie/{id}', 'MovieController@destroy')->middleware('auth:api');

