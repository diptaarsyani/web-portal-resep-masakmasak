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

//Recipes API routes
Route::get('/recipes', 'ApiRecipesController@index');
Route::get('/recipe/{id}', 'ApiRecipesController@show');
Route::post('/recipe', 'ApiRecipesController@store');
Route::put('/recipe/{id}', 'ApiRecipesController@update');
Route::delete('/recipe/{id}', 'ApiRecipesController@destroy');

//Users API routes
Route::get('/users', 'ApiUserController@index');
Route::get('/users/{id}', 'ApiUserController@show');
Route::post('/user', 'ApiUserController@store');
Route::put('/user/{id}', 'ApiUserController@update');
Route::delete('/user/{id}', 'ApiUserController@destroy');

Route::put('/setAsAdmin/{id}', 'ApiUserController@setAsAdmin');


