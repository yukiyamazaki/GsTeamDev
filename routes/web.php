<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestZakiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MakerController;

//BL = ログイン前  AL = ログイン後
//トップページへ
Route::get('/',[MakerController::class, 'top'])->name('top');

//Aboutページへ
Route::get('/about',[UserController::class, 'about']);

//User Singup画面へ
Route::get('/signup',[UserController::class, 'signup']);

//User Singup処理へ
Route::get('/signup_act',[UserController::class, 'signup_act']);

//User login画面へ
Route::get('/login',[UserController::class, 'login']);

//User login処理へ
Route::get('/login_act',[UserController::class, 'login_act']);

//各投稿資料の詳細ページ
Route::get('contents/{id}',[MakerController::class, 'contents'])->name('contents');

//検索時
Route::get('/search',[UserController::class, 'search']);

//資料投稿ページへ
Route::get('/upload',[MakerController::class, 'upload']);

//資料投稿ページへ
Route::post('/upload_act',[MakerController::class, 'upload_act']);

//マイページへ
Route::get('/myPage',[UserController::class, 'mypage']);

//サポートページへ
Route::get('/suport',[UserController::class, 'suport']);

//ログアウトページへ
Route::get('/logout',[UserController::class, 'logout']);

//利用規約へ
Route::get('/userule',[UserController::class, 'userule']);

//コンタクトページへ
Route::get('/contact',[UserController::class, 'contact']);







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
Route::post('/testDocReg', [TestZakiController::class,'testDocReg']);
/* Yamazaki TEST_検索機能 */
Route::get('/testSearch', [TestZakiController::class,'testSearch']);
/* Yamazaki TEST_ソート機能 */
Route::get('/sortSearch', [TestZakiController::class,'sortSearch']);

//Zaki_いいねを追加処理
Route::get('/like',[TestZakiController::class,'like']);

//Zaki_いいねを削除する処理
Route::get('/unlike',[TestZakiController::class,'unlike']);
































