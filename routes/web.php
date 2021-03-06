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

Route::get('/start', function () {
    return view('welcome');
});

Route::prefix('api')->group(function() {
    Route::resource('tasks', 'TaskController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth', 'middleware' => 'access:admin'], function () {
    // Здесь продолжайте свое творение
    Route::get('dashboard', function() {
        return view('task');
    } );


});