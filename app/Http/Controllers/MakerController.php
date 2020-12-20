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
class MakerController extends Controller
{
   // Topページへの遷移
   public function top(){
    //documentテーブルのデータを取得
    $documents = Document::orderby('created_at','desc')->limit(3)->get();

    //いいねが多い順で上位5件のPostを表示
    $documents_sums = Post_like::orderby('likeid_sum','desc')->limit(5)->get();

    //繰り返し構文を使用せず人気記事を取得
    $fav_1 = $documents_sums[0];
    $fav_2 = $documents_sums[1];
    $fav_3 = $documents_sums[2];
    $fav_4 = $documents_sums[3];
    $fav_5 = $documents_sums[4];

    // echo $fav_1;
    return view('/top',compact('documents','fav_1','fav_2','fav_3','fav_4','fav_5'));

  }

    // content詳細を取得
    public function contents(){
      //idを取得

      //取得したidを元にdocumentテーブルから資料情報を取得
      $document = Document::where('id',1)->first();

      return view('contents',compact('document'));
    }

    


  // 資料投稿ページへの遷移
  public function upload(){
    return view('upload');
  }
  
}