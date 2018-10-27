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
Route::get('project/create-detail', 'ProjectController@create_project_detail');
Route::get('project/loading', 'ProjectController@loading');
Route::get('project/result', 'ProjectController@result');
Route::resource('project','ProjectController');


Route::get('/', function () {
    return view('welcome');
});
