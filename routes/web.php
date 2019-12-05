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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('portfolio','HomeScreenController');




Route::get('/about', 'HomeScreenController@getabout')->name('about');
Route::get('/experience', 'HomeScreenController@getexp')->name('experience');
Route::get('/education', 'HomeScreenController@getedu')->name('education');
Route::get('/hireme', 'HomeScreenController@gethire')->name('hireme');
Route::get('/skills', 'HomeScreenController@getskills')->name('skills');
Route::get('/portfolio', 'HomeScreenController@getportfolio')->name('portfolio');