<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Http\UploadedFile;

class TestZakiController extends Controller
{
    // トップページの表示
    public function index(){
        //documentテーブルのデータを取得
        $documents = Document::orderby('created_at','desc')->get();


        //いいねが多い順の人気投稿



        return view('/test',
            ['documents'=>$documents]);
    }


    //投稿登録機能
    public function testDocReg(Request $request){

        //$filePath = $request->file('file')->store('/files','public');
        // fileの受け取り
        $image = $request->file;
        $filePath = $image->store('public');

        //1.資料保存のformで登録されたデータを取得＆保存
        $all = $request->all();
        $title = $request->get('title');
        $discription = $request->get('discription');
        $file_type = 'file_type';
        $document_name = 'document_name';
        $school_categroy = $request->get('school_categroy');
        $subject = $request->get('subject');
        $grade = $request->get('grade');

        //2.バリデーションエラー

        //3.DBへ登録処理
        $document = new Document;
        $document->title = $title;
        $document->discription = $discription;
        $document->file_type = $file_type;
        $document->document_name = $document_name;
        $document->school_categroy = $school_categroy;
        $document->subject =$subject;
        $document->grade = $grade;
        $file_name = $document->file_type = str_replace('public/','',$filePath);
        $document->save();

        return view('testZaki_result',
    ['file_name'=>$file_name]);
    }


    //検索機能
    public function testSearch(Request $request){
        $search_keyword = $request->get('search');
        
        $searchFiles = DB::table('document')
                            ->where('title','like','%'.$search_keyword.'%')
                            ->get();

        return view('/testZaki_result',
            ['searchFiles'=>$searchFiles]);
        
    }

    //ソート機能
    public function sortSearch(Request $request){
        $sort_keyword = $request->get('sort_keyword');

        $sortFiles = DB::table('document')
                        ->where('subject','=',$sort_keyword)
                        ->get();

        return view('/testZaki_result',
            ['sortFiles'=>$sortFiles]);
    }


    //Zaki_いいねを追加処理
    public function like(){
        //User＆Postのidを取得
        $like_user_id = '1';//ログインユーザーID取得
        $like_document_id = '222';//いいね押した資料ID取得
        
        //取得したidをtableに保存
        $like = new like;
        $like->like_user_id = $like_user_id;
        $like->like_document_id = $like_document_id;
        $like->save();

        //testページへ戻る
        return view('/test');
    }
    


    //Zaki_いいねを削除する処理
    public function unlike(){  
        //UseridとPostidを取得
        $like_user_id = '1';
        $like_document_id = '222';

        //取得したidからデータを削除
        DB::table('like')->where('id', '=', 1)->delete();

         //testページへ戻る
         return view('/test');
    }
    
    
}
