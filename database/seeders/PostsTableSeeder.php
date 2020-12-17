<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_table')->insert([
            'post_user_id'=> '2',
            'document_id'=> '333',
        ]);
        DB::table('post_table')->insert([
            'post_user_id'=> '33',
            'document_id'=> '333',
        ]);
        DB::table('post_table')->insert([
            'post_user_id'=> '444',
            'document_id'=> '333',
        ]);
        DB::table('post_table')->insert([
            'post_user_id'=> '555',
            'document_id'=> '333',
        ]);
    }
}
