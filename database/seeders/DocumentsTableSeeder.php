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
            'title' => 'タイトル',
            'discription' => '説明説明説明説明',
            'file_type' => 'pdffff',
            'document_name' =>'テスト',
            'school_categroy' => '小学生',
            'subject' => '科学',
            'grade' => '1年生',
        ]);

        DB::table('document')->insert([
            'title' => 'タイトル2',
            'discription' => '説明説明説明説明',
            'file_type' => 'pdffff',
            'document_name' =>'テスト',
            'school_categroy' => '小学生',
            'subject' => '科学',
            'grade' => '1年生',
        ]);
        DB::table('document')->insert([
            'title' => 'タイトル',
            'discription' => '説明説明説明説明',
            'file_type' => 'pdffff',
            'document_name' =>'テスト',
            'school_categroy' => '小学生',
            'subject' => '科学',
            'grade' => '1年生',
        ]);

        DB::table('document')->insert([
            'title' => 'タイトル2',
            'discription' => '説明説明説明説明',
            'file_type' => 'pdffff',
            'document_name' =>'テスト',
            'school_categroy' => '小学生',
            'subject' => '科学',
            'grade' => '1年生',
        ]);

        
    }
}
