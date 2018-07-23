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
    return view('welcome');
});

Route::get('/news', 'NewsController@index');
Route::get('/news/page/{page?}', 'NewsController@index');
Route::get('/news/category/{name?}/{subcategoryOrPage?}/{pageOrPageNum?}/{subcategoryPageNum?}', 'NewsController@category');
Route::get('/news/{years}/{month?}/{name?}', 'NewsController@news');

