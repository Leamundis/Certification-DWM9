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

Auth::routes();

Route::get('/', 'NavController@home');
Route::get('/album', 'NavController@album');
Route::get('/shirt', 'NavController@shirt');
Route::get('/instrument', 'NavController@instrument');