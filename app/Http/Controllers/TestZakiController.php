<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestZakiController extends Controller
{
    //
    public function index(){
        //documentテーブルのデータを取得
        $documents = Document::orderby('created_at','desc')
                        ->get();

        return view('/test',
            ['documents'=>$documents]);
    }

    public function testDocReg(Request $request){
        //1.資料保存のformで登録されたデータを取得＆保存
        $all = $request->all();
        $title = $request->get('title');
        $discription = $request->get('discription');
        $file_type = 'file_type';
        $document_name = 'document_name';
        $school_categroy = $request->get('school_categroy');
        $subject = $request->get('subject');
        $grade = $request->get('grade');

        //確認用の作業（returnが無いとエラー）
        //return $all;

        //2.バリデーションエラー

        //3.DBへ登録処理
        $document = new Document;
        $document->title =$title;
        $document->discription = $discription;
        $document->file_type = $file_type;
        $document->document_name = $document_name;
        $document->school_categroy = $school_categroy;
        $document->subject =$subject;
        $document->grade = $grade;
        $document->save();
        return redirect('test');
    }

    public function testSearch(Request $request){
        $search_keyword = $request->get('search');
        $Search_docs = Document::orderby('created_at','desc')
        ->get();
                        

        return view('/test',
            ['Search_docs'=>$Search_docs]);
        
    }
    
}
