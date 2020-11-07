<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'user_id' => 1,
                'address' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
