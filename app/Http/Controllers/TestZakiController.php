<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Http\UploadedFile;

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
        $document->title =$title;
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



    public function testSearch(Request $request){
        $search_keyword = $request->get('search');
        
        $searchFiles = DB::table('document')
                            ->where('title','like','%'.$search_keyword.'%')
                            ->get();

        return view('/testZaki_result',
            ['searchFiles'=>$searchFiles]);
        
    }

    public function sortSearch(Request $request){
        $sort_keyword = $request->get('sort_keyword');

        $sortFiles = DB::table('document')
                        ->where('subject','=',$sort_keyword)
                        ->get();

        return view('/testZaki_result',
            ['sortFiles'=>$sortFiles]);


    }

    
}
