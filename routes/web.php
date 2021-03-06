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
Route::get('/privacy', function () {
    return view('privacy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login/google', 'Auth\LoginController@redirectToProvider');
Route::get('/login/google/callback', 'Auth\LoginController@handleProviderCallback');
Route::post('/store', 'ExtractorController@store');
Route::get('/calendar', 'ExtractorController@calendar');
Route::get('/jobs/add', 'ExtractorController@add');
Route::get('/jobs/{id}/progress', 'ExtractorController@status');
