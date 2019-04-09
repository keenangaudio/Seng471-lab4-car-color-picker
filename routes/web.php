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

Route::get('/home/view', 'HomeController@show')->name('users');

Route::get('/home/save', 'HomeController@store');

Route::get('home/edit/{user}', 'HomeController@edit');

Route::patch('home/edit/update', 'HomeController@update')->name('update');
