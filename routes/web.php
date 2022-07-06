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

/**
Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'This is user '.$name.' with an id of '.$id;
});

Route::get('/', function() {
   return View::make('pages.home');
});

Route::get('/about', function() {
   return View::make('pages.contact');
});
*/

Route::controller('PagesController')->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about');
    Route::get('/services', 'services');
});

Route::get('/home', function() {
    return View::make('pages.home');
 });

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
