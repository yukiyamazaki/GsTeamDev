<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_table')->insert([
            'user_name'=> Str::random(5),
            'user_mail'=> Str::random(10).'@gmail.com',
            'contact_category'=> Str::random(5),
            'contact_content'=> Str::random(10),
            'login_user_id'=>'111',
        ]);
        DB::table('contact_table')->insert([
            'user_name'=> Str::random(5),
            'user_mail'=> Str::random(10).'@gmail.com',
            'contact_category'=> Str::random(5),
            'contact_content'=> Str::random(10),
            'login_user_id'=>'111',
        ]);
        DB::table('contact_table')->insert([
            'user_name'=> Str::random(5),
            'user_mail'=> Str::random(10).'@gmail.com',
            'contact_category'=> Str::random(5),
            'contact_content'=> Str::random(10),
            'login_user_id'=>'111',
        ]);
    }
}
