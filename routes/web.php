<?php

//Route::get('/', function () {
//    return view('master');
//});

Route::get('/extra', function () {
    return view('extraWelcomeView');
});

Auth::routes();

//views
Route::get('/', 'RecipesController@index')->name('home');

Route::get('/create', 'RecipesController@create');

Route::get('/user/{id}/recipes', 'RecipesController@getUserRecipes');
Route::get('/show/{id}', 'RecipesController@show');
Route::get('/edit/{id}', 'RecipesController@edit');

Route::get('/image/{image}', 'RecipesController@getImage')->name('recipes.image');
Route::get('/user/{id}/edit', 'UserController@edit');
Route::get('/user/{id}', 'UserController@show');
Route::get('/search', 'RecipesController@search')->name('home.search');
Route::get('/searchbahan', 'RecipesController@searchbahan')->name('home.searchbahan');

//
Route::post('/store', 'RecipesController@store');

Route::put('/update/{id}', 'RecipesController@update');
Route::delete('/delete/{id}', 'RecipesController@destroy');

Route::put('/user/{id}/update', 'UserController@update');
Route::get('/downloadExcel','UserController@exportUsers');

