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

Route::get('/top', function () {
    return view('top');
});

Route::get('/contents', function () {
    return view('contents');
});



/* Yamazaki TEST */
Route::get('/test', function(){
    return view('test');
});
/* haryu TEST */
Route::get('/hariu', function(){
    return view('hariu');
});
/* kazukiti TEST */
Route::get('/kazukiti', function(){
    return view('kazukiti');
});
/* isii TEST */
Route::get('/isii', function(){
    return view('isii');
});
