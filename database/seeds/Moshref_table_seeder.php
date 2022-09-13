<?php

use Illuminate\Database\Seeder;

class Moshref_table_seeder extends Seeder
{

    public function run()
    {
        $user = \App\User::create([
            'first_name' => 'المشرف ',
            'last_name' => 'العام',
            'email' => 'nn123ssm@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $user->attachRole('moshref');
    }
}
