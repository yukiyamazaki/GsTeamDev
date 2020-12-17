<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\document;
use Illuminate\Http\Request;

class TestZakiController extends Controller
{
    //
    public function index(){
        return view('/test');
    }

    public function testDocReg(Request $request){
        //1.資料保存のformで登録されたデータを取得＆保存
        $all = $request->all();
        $title = $request->get('title');
        $discription = $request->get('discription');
        $file_type = 'file_type';
        $document_name = 'document_name';
        $school_category = $request->get('school_category');
        $subject = $request->get('subject');
        $grade = $request->get('grade');

        //確認用の作業（returnが無いとエラー）
        //return $all;

        //2.バリデーションエラー

        //3.DBへ登録処理
        $document = new document;
        $document->title ='aaa';
        $document->discription = 'aaa';
        $document->file_type = '111';
        $document->document_name = '222';
        $document->school_categroy = 'aaa';
        $document->subject ='aaa';
        $document->grade = 'aaa';
        // $document->title = $title->title;
        // $document->discription = $discription->discription;
        // $document->file_type = '111';
        // $document->document_name = '222';
        // $document->school_category = $school_category->school_category;
        // $document->subject = $subject->subject;
        // $document->grade = $grade->grade;
        $document->save();
        return redirect('test');
    }
    
}
