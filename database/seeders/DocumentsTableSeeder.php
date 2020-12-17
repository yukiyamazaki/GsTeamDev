<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DocumentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('document_table')->insert([
            'title' => 'タイトル',
            'discription' => '説明説明説明説明',
            'file_type' => 'pdffff',
            'document_name' =>'テスト',
            'school_categroy' => '小学生',
            'subject' => '科学',
            'grade' => '1年生',
        ]);

        DB::table('document_table')->insert([
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
