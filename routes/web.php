<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();



Route::get('/', function () {
return view('admin_template');
});

Route::get('/utep', 'UtepController@index');
Route::get('/ucept', 'UceptController@index');
Route::get('/toeic', 'ToeicController@index');
Route::get('/toefl', 'ToeflController@index');
Route::get('/ielts', 'IeltsController@index');