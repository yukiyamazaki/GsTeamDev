<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Post_like;
use App\Models\like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Http\UploadedFile;


// 主にUserからの命令を処理
class UserController extends Controller
{
  // Topページへの遷移
  public function top(){
    return view('top');
  }
  
  // aboutページへの遷移
  public function about(){
    return view('about');
  }
  
  // Signupページへの遷移
  public function signup(){
    return view('signup');
  }
  
  // Loginページへの遷移
  public function login(){
    return view('login');
  }
  
  // contents
  public function contents(){
    return view('contents');
  }

  // search
  public function search(){
    return view('search');
  }
  
  // myPageページへの遷移
  public function mypage(){
    return view('mypage');
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