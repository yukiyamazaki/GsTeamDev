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
    //documentテーブルのデータを取得（新着順）
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

     //お気に入りが多い順で上位5件のPostを表示
     $like_num = Like::orderby('likeid_user_id','desc')->limit(5)->get();

     //繰り返し構文を使用せず人気記事を取得
     $fav_1 = $documents_sums[0];
     $fav_2 = $documents_sums[1];
     $fav_3 = $documents_sums[2];
     $fav_4 = $documents_sums[3];
     $fav_5 = $documents_sums[4];

  }

    // content詳細を取得
    public function contents($id){
      //取得したidを元にdocumentテーブルから資料情報を取得
      $document = Document::where('id',$id)->first();

      $file_type = $document->file_type;
      // echo $document;

      $file_name =  str_replace('public/','',$file_type);

      //file_nameがあれば行ける
      return view('contents',compact('document','file_name'));
    }

  // 資料投稿ページへの遷移
  public function upload(Request $request){

    return view('upload');
  }


  // 資料投稿処理
  public function upload_act(Request $request){
    //1.formで登録されたデータを取得＆保存
    $title = $request->get('title'); 
    $description = $request->get('description');
    $subject = $request->get('subject');
    $grade = $request->get('grade');
    $school_categroy = $request->get('category');
    $document_pass = $request->file;
    //投稿したfileの取得
    $filePath = $document_pass->store('public');

    //データベース登録
    $document = new Document;
    $document->title = $title;
    $document->discription = $description;
    $document->subject = $subject;
    $document->grade = $grade;
    $document->school_categroy = $school_categroy;
    $document->document_name = $document_pass;
    $document->file_type = str_replace('public/','',$filePath);
    $document->save();

    return redirect()->route('top');
  }
  
}