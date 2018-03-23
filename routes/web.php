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

// Mains Route
Route::get('/', 'NavController@home');
Route::get('/album', 'NavController@album');
Route::get('/shirt', 'NavController@shirt');
Route::get('/instrument', 'NavController@instrument');


// Shirt Route
Route::get('/insertShirt', 'NavController@insertShirt');
Route::post('/insertShirt', 'ActionController@insertShirt');
Route::post('/updateShirt', 'NavController@updateShirt');
Route::post('/updateOneShirt', 'ActionController@updateOneShirt');
Route::post('/deleteShirt', 'ActionController@deleteOneShirt');
Route::post('/plusOneShirt', 'ActionController@plusOneShirt');
Route::post('/minusOneShirt', 'ActionController@minusOneShirt');

// Album Route
Route::get('/insertAlbum', 'NavController@insertAlbum');
Route::post('/insertAlbum', 'ActionController@insertAlbum');
Route::post('/updateAlbum', 'NavController@updateAlbum');
Route::post('/updateOneAlbum', 'ActionController@updateOneAlbum');
Route::post('/deleteAlbum', 'ActionController@deleteOneAlbum');
Route::post('/plusOneAlbum', 'ActionController@plusOneAlbum');
Route::post('/minusOneAlbum', 'ActionController@minusOneAlbum');

// Artist Route
Route::get('/artist', 'NavController@artist');
Route::post('/insertArtist', 'ActionController@insertArtist');

// Genre Route
Route::get('/genre', 'NavController@genre');
Route::post('/insertGenre', 'ActionController@insertGenre');