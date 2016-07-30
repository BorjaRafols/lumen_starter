<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
            'username' => str_random(10),
            'password' => bcrypt('secret'),
            'email' => str_random(10).'@gmail.com',
            'name' => str_random(10),
        ]);
    }
}