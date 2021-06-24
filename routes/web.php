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

//Auth::routes();
//
Route::get('/admin', function () {
    return view('admin.dashboard');
});

/*Route::get('/admin2', function () {
    return view('admin.dashboard1');
});

Route::get('/admin', function () {
    return view('admin.dashboard2');
});

/*Route::get('/login', function () {
    return view('admin');
});
*/


/*------------USER-----------*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('create','App\Http\Controllers\HomeController@create');
Route::post('create','App\Http\Controllers\HomeController@store');
Route::post('user/create','App\Http\Controllers\HomeController@store');
Route::get('show','App\Http\Controllers\HomeController@show');


Route::get('post/create','App\Http\Controllers\PostController@create');
Route::post('post/create','App\Http\Controllers\PostController@store');
Route::get('post/show','App\Http\Controllers\PostController@show');
