<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('like')->insert([
        'like_user_id'=> '111',
        'like_document_id'=> '3331',
      
    ]);
    DB::table('like')->insert([
        'like_user_id'=> '222',
        'like_document_id'=> '3331',
      
    ]);
    DB::table('like')->insert([
        'like_user_id'=> '333',
        'like_document_id'=> '3331',
      
    ]);
    DB::table('like')->insert([
        'like_user_id'=> '444',
        'like_document_id'=> '3331',
      
    ]);
    DB::table('like')->insert([
        'like_user_id'=> '555',
        'like_document_id'=> '3331',
      
    ]);
    DB::table('like')->insert([
        'like_user_id'=> '666',
        'like_document_id'=> '3331',
      
    ]);

    }
}


