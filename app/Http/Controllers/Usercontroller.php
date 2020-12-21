<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Post_like;
use App\Models\User;
use App\Models\like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Http\UploadedFile;


// 主にUserからの命令を処理
class UserController extends Controller
{
  // aboutページへの遷移
  public function about(){
    return view('about');
  }
  // Signupページへの遷移
  public function signup(){
    return view('signup');
  }
  // Signup処理
  public function signup_act(Request $request){
    //1.formで登録されたデータを取得＆保存
    $all = $request->all();
    $register_mail = $request->get('register_mail'); 
    $register_password = $request->get('register_password');
    //データベース登録
    $user = new User;
    $user->email = $register_mail;
    $user->password = $register_password;
    $user->user_name = $register_mail;
    $user->save();

    return view('/top');
  }
  // Loginページへの遷移
  public function login(){
    return view('login');
  }
  //Login処理
  public function login_act(Request $request){
    //1.formで登録されたデータを取得＆保存
    $all = $request->all();
    $login_mail = $request->get('login_mail'); 
    $login_password = $request->get('login_password');

    if(isset($login_mail)){
      echo "aaa";

    }else{
      echo 'bb';

    };



    // return view('top');
  }
  // search処理
  public function search(Request $request){
    // jsで受け取った値を変数へ格納
    // $all = $request->all();
    $keyword = $request->get('keyword'); 
    //キーワードを元に
    $search_contents = Document::orderby('created_at','desc')->where('title','like','%'.$keyword.'%')->get();

    //取得したidを元にdocumentテーブルから資料情報を取得
    // $document = Document::where($searchid->id,1)->first();
    return view('search',compact('search_contents'));
  }
  // myPageページへの遷移
  public function mypage(){
    return view('mypage');
  }

  // myPage編集画面ページへの遷移
  public function mypage_edit(){
    return view('mypage_edit');
  }

  // suport
  public function suport(){
    return view('suport');
  }
  // 利用規約へ
  public function logout(){
    return view('logout');
  }
  // 利用規約へ
  public function userule(){
    return view('userule');
  }
  // 利用規約へ
  public function contact(){
    return view('contact');
  }
}