<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@getIndex');
Route::get('/portfolio/{client?}', 'HomeController@getPortfolio');
Route::get('/services/{service?}', 'HomeController@getServices');
Route::get('/contact', function () {
    return view('emails.contact');
});
Route::post('/contact', 'HomeController@postContact');
Route::get('/style', function () {
    return view('style');
});