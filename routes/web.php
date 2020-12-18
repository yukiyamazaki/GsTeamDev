<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestZakiController;

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
Route::get('/test',[TestZakiController::class,'index']);
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


/* Yamazaki TEST_登録作業へ */
Route::get('/testDocReg', [TestZakiController::class,'testDocReg']);
/* Yamazaki TEST_検索機能 */
Route::get('/testSearch', [TestZakiController::class,'testsearch']);
/* Yamazaki TEST_ソート機能 */
Route::get('/sortSearch', [TestZakiController::class,'sortSearch']);































