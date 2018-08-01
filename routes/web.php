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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('user/absensi','AbsensiController');
Route::resource('user/backlog','BacklogController');
Route::resource('user/sprint','SprintController');
Route::resource('user/project','ProjectController');
Route::resource('user/owner','OwnerController');
