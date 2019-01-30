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
Route::get('project/create-detail/{id}', 'ProjectController@create_project_detail')->name('create-detail');
Route::get('project/add-item-pendahuluan', 'ProjectController@addItemLaporanPendahuluanAction');
Route::get('project/add-item-antara', 'ProjectController@addItemLaporanAntaraAction')->name('add-item-antara');
Route::get('project/add-item-draft-akhir', 'ProjectController@addItemLaporanDraftAkhirAction')->name('add-item-draft-akhir');
Route::get('project/add-item-akhir', 'ProjectController@addItemLaporanAkhirAction')->name('add-item-akhir');
Route::post('project/save-detail', 'ProjectController@saveDetailAction')->name('save-detail');
Route::get('project/loading/{id}', 'ProjectController@loading')->name('process-detail');
Route::get('result/{id}', 'ProjectController@result');
Route::get('converting', 'ProjectController@converting')->name('converting');
Route::get('project/detail/{id}', 'ProjectController@project_detail')->name('project-detail');
Route::get('project/match-detail/{id}', 'ProjectController@project_match_detail')->name('project-match-detail');
Route::resource('project','ProjectController');
Auth::routes();


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
