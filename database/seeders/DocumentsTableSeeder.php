<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DocumentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('document')->insert([
            [
                'title' => '足し算の計算',
                'discription' => '説明説明説明説明',
                'file_type' => 'ppt',
                'document_name' =>'足し算の計算',
                'school_categroy' => '小学校',
                'subject' => '算数',
                'grade' => '1年',
            ],[
                'title' => '日本の農業と食料問題',
                'discription' => '説明説明説明説明',
                'file_type' => 'ppt',
                'document_name' =>'日本の農業の農業',
                'school_categroy' => '高校',
                'subject' => '社会',
                'grade' => '2年',
            ],[
                'title' => '火山の成り立ち',
                'discription' => '火山の成り立ち',
                'file_type' => 'ppt',
                'document_name' =>'火山の成り立ち',
                'school_categroy' => '中学校',
                'subject' => '理科',
                'grade' => '3年',
            ],
        ]);
    }
}
