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

Route::get('/tasks', 'TasksController@index');
Route::get('tasks/{task}', 'TasksController@show');

Route::get('blog','PostController@index');
Route::get('blog/posts/create','PostController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
