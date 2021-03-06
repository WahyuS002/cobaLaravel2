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


Route::get('/', 'PagesController@home');
Route::get('/anime', 'AnimeController@index');

// List
Route::get('/list', 'AnimeListsController@index');
Route::get('/list/create', 'AnimeListsController@create');
Route::post('/list', 'AnimeListsController@store');
Route::get('/list/{animeList}', 'AnimeListsController@show');
