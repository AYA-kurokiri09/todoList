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

Route::get('/', function () {
    return view('welcome');
});

Route::get('todo', 'TodoController@index');
Route::post('todo', 'TodoController@add');
Route::post('todo/delete', 'TodoController@delete');
Route::post('todo/toggle', 'TodoController@toggle');
Route::post('todo/choose', 'TodoController@choose');
