<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('task','taskcontroller@index');
Route::post('task1','taskcontroller@index1');
Route::post('task2','taskcontroller@index2');
Route::get('task/create','taskcontroller@create');
Route::get('task/{id}','taskcontroller@show');
Route::post('task','taskcontroller@store');
Route::get('task/{id}/edit','taskcontroller@edit');
Route::PUT('task/{id}','taskcontroller@update');
Route::get('delete/{id}','taskcontroller@delete');
Route::get('task3','taskcontroller@show1');
//Route::get('user','taskcontroller@index3');