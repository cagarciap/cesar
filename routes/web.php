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



//parcial
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/planes/create', 'App\Http\Controllers\PlaneController@create')->name("planes.create");
Route::get('/planes/list', 'App\Http\Controllers\PlaneController@list')->name("planes.list");
Route::post('/<>/', 'App\Http\Controllers\PlaneController@save')->name("planes.save");
Route::get('/planes/stats', 'App\Http\Controllers\PlaneController@stats')->name("planes.stats");