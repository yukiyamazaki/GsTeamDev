<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostlikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('post_likes')->insert([
        'post_id'=> '1',
        'likeid_sum'=> '222',
    ]);
    DB::table('post_likes')->insert([
        'post_id'=> '2',
        'likeid_sum'=> '111',
    ]);
    DB::table('post_likes')->insert([
        'post_id'=> '3',
        'likeid_sum'=> '3333',
    ]);
    }
}
