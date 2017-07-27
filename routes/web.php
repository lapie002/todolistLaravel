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

Route::get('/tasks', function () {return view('/tasks/index');});

Route::get('/tasks', 'TaskController@index');

Route::get('/tasks/create', 'TaskController@create');

Route::get('/tasks/gettask/{id}','TaskController@gettask');

Route::get('/tasks/deletetask/{id}', 'TaskController@delete');

Route::get('/tasks/changesatus/{id}', 'TaskController@changeTaskStatus');

Route::post('/tasks/save', 'TaskController@store');

Route::post('/tasks/update/{id}', 'TaskController@update');

Route::post('/tasks/deletetaskform/', 'TaskController@deleteTask');
