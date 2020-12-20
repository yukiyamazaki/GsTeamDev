<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestZakiController;

//BL = ログイン前  AL = ログイン後
//トップページへ
Route::get('/', function () {
    return view('top');
});

//User 新規登録画面へ
Route::get('/signup', function () {
    return view('signup');
});

//各投稿資料の詳細ページ
Route::get('contents/{username}/{contents_id}', function () {
    return view('contents');
});

//検索時
Route::get('/search/{keyword}', function () {
    return view('/search/{keyword}');
});

//資料投稿ページへ
Route::get('/upload', function () {
    return view('/upload');
});

//マイページへ
Route::get('myPage/{username}', function () {
    return view('mypage');
});
   
//サポートページへ
Route::get('/suport', function () {
    return view('/suport');
});

//ログアウトページへ
Route::get('/logout', function () {
    return view('/logout');
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
Route::post('/testDocReg', [TestZakiController::class,'testDocReg']);
/* Yamazaki TEST_検索機能 */
Route::get('/testSearch', [TestZakiController::class,'testSearch']);
/* Yamazaki TEST_ソート機能 */
Route::get('/sortSearch', [TestZakiController::class,'sortSearch']);

//Zaki_いいねを追加処理
Route::get('/like',[TestZakiController::class,'like']);

//Zaki_いいねを削除する処理
Route::get('/unlike',[TestZakiController::class,'unlike']);
































