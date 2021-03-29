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

Route::get('/', 'HomeController@index');
Route::get('/portfolio/{client?}', 'HomeController@portfolio');
Route::get('/services/{service?}', 'HomeController@services');
Route::post('/contact', array('middleware' => 'cors', 'uses' => 'HomeController@submitForm'));
Route::get('/style', 'HomeController@style');
