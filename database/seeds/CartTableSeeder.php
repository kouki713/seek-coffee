<?php

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            [
                'user_id' => 1,
                'item_id' => 1,
                'num' => 2,
            ],
            [
                'user_id' => 1,
                'item_id' => 5,
                'num' => 3,
            ],
        ]);
    }
}
