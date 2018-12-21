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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'TaskController@home');

Route::get('/hello-world/{name?}', function($name = 'test') {
	return 'hello world!' . $name;
});

Route::get('tasks/create', 'TasksController@create');
Route::post('tasks', 'TasksController@store');
