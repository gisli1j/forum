<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Gísli Freyr Ragnarsson',
            'email' => 'gisliragnarsson@gmail.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('threads')->insert([
            ['title' => 'Titill A', 'body' => 'Body fyrir titil A', 'user_id' => 1],
            ['title' => 'Titill B', 'body' => 'Body fyrir titil B', 'user_id' => 1],
            ['title' => 'Titill C', 'body' => 'Body fyrir titil C', 'user_id' => 1],
            ['title' => 'Titill D', 'body' => 'Body fyrir titil D', 'user_id' => 1],
            ['title' => 'Titill E', 'body' => 'Body fyrir titil E', 'user_id' => 1]
        ]);
    }
}
