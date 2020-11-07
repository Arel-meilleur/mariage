<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/jean', 'PostController@display_post');
// Route::get('/master/', 'PostController@index');
Route::get('/master', 'PostController@create');
// Route::get('/adminpanel', 'Admin\AdminController@index');
Route::get('/adminpanel', 'Admin\AdminController@index');
Route::get('/adminpanel/list', 'Admin\AdminController@create');
Route::Post('/post/store','PostController@store');
Route::get('/post/after','PostController@index');
Route::resource('/post/show','PostController');
Route::get('/post/show','PostController@display_post');
Route::get('/post/shows','PostController@listing');
Route::get('/album/show','Admin\AdminController@display_album');
Route::delete('/post/delete/{id}','Admin\AdminController@destroy');
Route::put('/post/status/{id}', 'Admin\AdminController@status' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
