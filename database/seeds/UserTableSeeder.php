<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {


        $user = \App\User::create([
            'first_name' => 'تهامي',
            'last_name' => 'عبد الرحمن',
            'email' => 'toohami09952@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $user->attachRole('super_admin');


    }
}
