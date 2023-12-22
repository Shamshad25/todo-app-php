<?php

use App\Models\todo_list;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\TodoListController@index');

Route::get('create', 'App\Http\Controllers\TodoListController@create');

Route::get('save_new_list', 'App\Http\Controllers\TodoListController@store');
