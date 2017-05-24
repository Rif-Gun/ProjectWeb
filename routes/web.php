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

Route::get('/', 'FrontController@home')->name('home');
Route::get('blankpage', 'FrontController@blank')->name('blankpage');
Route::get('aboutpage', 'FrontController@aboutPage')->name('aboutpage');


