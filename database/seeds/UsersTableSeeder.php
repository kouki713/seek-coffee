<?php

use Illuminate\Database\Seeder;

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
            'name' => '山田太郎',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
    }
}
