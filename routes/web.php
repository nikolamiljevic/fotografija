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



 Route::resource('admin','AdminPhotosController')->middleware('auth');


Route::get('about','PagesController@about');
Route::get('services','PagesController@services');
Route::get('portfolio','PagesController@portfolio');
Route::get('blog','PagesController@blog');
Route::get('contact','PagesController@contact');


Route::resource('photos','PhotosController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
