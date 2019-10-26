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

Route::get('/signin', function () {
    return view('signin');
});
Route::get('/register', function () {
    return view('register');
});

Route::post('/upload', 'FilesController@store')->name('books.store');

Route::get('/show', 'FilesController@show');

Route::get('delete/{id}', ['uses' =>'FilesController@delete', 'as' => 'file.delete']);
Route::get('download/{id}', ['uses' =>'FilesController@download', 'as' => 'file.download']);