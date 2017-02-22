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

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('add-video', 'VideoController@add')->name('addVideo');
Route::post('add-video', 'VideoController@store')->name('videoStore');

Route::get('video', 'VideoController@show')->name('showVideo');

Route::get('upload', 'VideoController@upload');

