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
Route::post('/plusOnShirt', 'ActionController@plusOneShirt');
Route::post('/minusOnShirt', 'ActionController@minusOneShirt');




// Instrument Route
Route::get('/insertInstrument', 'NavController@insertInstrument');
Route::post('/insertInstrument', 'ActionController@insertInstrument');
Route::post('/updateInstrument', 'NavController@updateInstrument');
Route::post('/updateOneInstrument', 'ActionController@updateOneInstrument');