<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email'=> Str::random(10).'@gmail.com',
            'password'=> Hash::make('lpw'),
            'user_name'=> Str::random(10),
            'nickname'=> Str::random(10),
            'school_category'=> Str::random(10),
            'gender'=> '1',
            'subject'=> Str::random(5),
            'age'=> '32',
            'introduce'=> Str::random(30),
            'image_name'=>Str::random(10),
        ]);
        DB::table('users')->insert([
            'email'=> Str::random(10).'@gmail.com',
            'password'=> Hash::make('lpw'),
            'user_name'=> Str::random(10),
            'nickname'=> Str::random(10),
            'school_category'=> Str::random(10),
            'gender'=> '1',
            'subject'=> Str::random(5),
            'age'=> '32',
            'introduce'=> Str::random(30),
            'image_name'=>Str::random(10),
        ]);
        DB::table('users')->insert([
            'email'=> Str::random(10).'@gmail.com',
            'password'=> Hash::make('lpw'),
            'user_name'=> Str::random(10),
            'nickname'=> Str::random(10),
            'school_category'=> Str::random(10),
            'gender'=> '1',
            'subject'=> Str::random(5),
            'age'=> '32',
            'introduce'=> Str::random(30),
            'image_name'=>Str::random(10),
        ]);
        DB::table('users')->insert([
            'email'=> Str::random(10).'@gmail.com',
            'password'=> Hash::make('lpw'),
            'user_name'=> Str::random(10),
            'nickname'=> Str::random(10),
            'school_category'=> Str::random(10),
            'gender'=> '1',
            'subject'=> Str::random(5),
            'age'=> '32',
            'introduce'=> Str::random(30),
            'image_name'=>Str::random(10),
        ]);
     
    }
}
