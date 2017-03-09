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

Route::get('/', 'IndexController@index')->name('index');


Route::post('/more', function (Request $request) {
    var_dump($request);
    if (Request::ajax()) {
        $count = 12;

        return redirect()->action('IndexController@index', ['count' => $count]);
    };
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('add-video', 'VideoController@add')->name('addVideo');
Route::post('add-video', 'VideoController@store')->name('videoStore');

Route::get('video', 'VideoController@show');

Route::get('upload', 'VideoController@upload');

Route::get('videos/{id}', 'VideoPageController@show')->name('videoPage');
Route::post('videos/{id}', 'VideoPageController@storeComment')->name('storeComment');

Route::post('home', 'HomeController@uploadAvatar');

Route::get('user/{id}', 'UserController@show')->name('UserPage');

