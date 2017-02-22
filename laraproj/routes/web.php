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
    return view('layouts.site');
});
Route::get('page', 'IndexController@index');
Route::get('user/{id}', 'IndexController@show')->name('userShow');
Route::get('add-video', 'VideoController@add');
Route::post('add-video', 'VideoController@store')->name('videoStore');

Auth::routes();

Route::get('/home', 'HomeController@index');
