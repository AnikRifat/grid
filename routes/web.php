<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', 'PublicController@index')->name('index');
Route::get('/blogs', 'PublicController@blogIndex')->name('blogs');
Route::get('/view_blogs/{blog}', 'PublicController@viewBlogs')->name('Blog Details');



//blogs-route
Route::prefix('admin/blogs')->middleware('auth')->group(function () {
    Route::get('/view_blogs', 'BlogController@index')->name('index');
    Route::get('/create', 'BlogController@create')->name('create');
    Route::post('/store', 'BlogController@store')->name('store');
    Route::get('/edit/{blog}', 'BlogController@edit')->name('edit');
    Route::put('/update/{blog}', 'BlogController@update')->name('update');
    Route::delete('/{blog}', 'BlogController@destroy')->name('destroy');
});
//content-route
Route::prefix('admin/settings')->middleware('auth')->group(function () {
    Route::get('/content', 'WebsiteController@index')->name('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
// Route::get('/logout', [App\Http\Controllers\HomeController::class, 'home'])->name('index');
