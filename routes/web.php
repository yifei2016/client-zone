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

// Route::get('/', function () {
//     return view('example');
// });
Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');


//Route::get('/projects', 'ProjectController@index');
// Route::get('/index', 'ProjectController@index');
Route::resource(
  'projects', 'ProjectController'
);
