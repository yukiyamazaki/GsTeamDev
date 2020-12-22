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
        'post_id'=> 1,
        'likeid_sum'=> 33,
    ]);
    DB::table('post_likes')->insert([
        'post_id'=> 2,
        'likeid_sum'=> 11,
    ]);
    DB::table('post_likes')->insert([
        'post_id'=> 3,
        'likeid_sum'=> 444,
    ]);
    DB::table('post_likes')->insert([
        'post_id'=> 4,
        'likeid_sum'=> 44,
    ]);
    DB::table('post_likes')->insert([
        'post_id'=> 5,
        'likeid_sum'=> 4324,
    ]);
    DB::table('post_likes')->insert([
        'post_id'=> 6,
        'likeid_sum'=> 33,
    ]);
    DB::table('post_likes')->insert([
        'post_id'=> 7,
        'likeid_sum'=> 888,
    ]);
    }
}
