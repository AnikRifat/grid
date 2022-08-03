<?php

use App\Http\Controllers\BlogController;
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


Route::get('/', 'BlogController@home')->name('home');


Route::get('view_blogs', 'BlogController@index')->name('index');
Route::get('create', 'BlogController@create')->name('create');
Route::post('store', 'BlogController@store')->name('store');
Route::get('edit/{blog}', 'BlogController@edit')->name('edit');
Route::put('update/{blog}', 'BlogController@update')->name('update');
Route::delete('/{blog}', 'BlogController@destroy')->name('destroy');
