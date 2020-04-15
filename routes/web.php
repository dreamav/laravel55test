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

Route::get('posts','PostsController@index');
Route::get('posts/create','PostsController@create');
Route::post('posts/','PostsController@store');
Route::get('posts/{post}','PostsController@show');
Route::get('posts/{post}/comments','CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionController@create');





Route::get('/home', 'HomeController@index')->name('home');
