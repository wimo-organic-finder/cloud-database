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
//Route pour la prmeière page (connexion/inscription)

//Route pour user
Route::middleware('auth')->group(function () {
  Route::get('/index', 'FilesController@show')->name('user_index');
  Route::get('/index/feedback', function () {
      return view('user/feedback');
  })->name('user_feedback');
  Route::get('/index_active', function () {
      return view('user/active_users');
  })->name('user_active');

});

//Route pour admin
Route::get('admin/upload', 'FilesController@upload')->name('admin_upload');

Route::post('','FilesController@store')->name('file.store');

Route::get('admin/index', 'FilesController@showAdmin')->name('admin_index');


// Route concernant la modification des fichiers stockés
Route::get('delete/{id}', ['uses' =>'FilesController@delete', 'as' => 'file.delete']);
Route::get('download/{id}', ['uses' =>'FilesController@download', 'as' => 'file.download']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
