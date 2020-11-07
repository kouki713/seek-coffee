<?php

use Illuminate\Database\Seeder;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            [
                'order_id' => 1,
                'item_id' => 1,
                'price' => '2000',
                'total_price' => '4000',
                'num' => 2,
            ],
            [
                'order_id' => 1,
                'item_id' => 2,
                'price' => '2000',
                'total_price' => '4000',
                'num' => 2,
            ],
            [
                'order_id' => 2,
                'item_id' => 3,
                'price' => '2000',
                'total_price' => '2000',
                'num' => 1,
            ],
            [
                'order_id' => 2,
                'item_id' => 5,
                'price' => '1800',
                'total_price' => '3600',
                'num' => 2,
            ],
            [
                'order_id' => 3,
                'item_id' => 4,
                'price' => '2000',
                'total_price' => '2000',
                'num' => 1,
            ],
            [
                'order_id' => 3,
                'item_id' => 1,
                'price' => '2000',
                'total_price' => '4000',
                'num' => 2,
            ],
            [
                'order_id' => 4,
                'item_id' => 2,
                'price' => '2000',
                'total_price' => '4000',
                'num' => 2,
            ],
            [
                'order_id' => 4,
                'item_id' => 3,
                'price' => '2000',
                'total_price' => '2000',
                'num' => 1,
            ],
            [
                'order_id' => 5,
                'item_id' => 2,
                'price' => '2000',
                'total_price' => '4000',
                'num' => 2,
            ],
            [
                'order_id' => 5,
                'item_id' => 6,
                'price' => '2000',
                'total_price' => '2000',
                'num' => 1,
            ],
            [
                'order_id' => 6,
                'item_id' => 1,
                'price' => '2000',
                'total_price' => '4000',
                'num' => 2,
            ],
            [
                'order_id' => 6,
                'item_id' => 4,
                'price' => '2000',
                'total_price' => '4000',
                'num' => 2,
            ],
            [
                'order_id' => 7,
                'item_id' => 5,
                'price' => '1800',
                'total_price' => '3600',
                'num' => 2,
            ],
            [
                'order_id' => 7,
                'item_id' => 2,
                'price' => '2000',
                'total_price' => '2000',
                'num' => 1,
            ],
            [
                'order_id' => 8,
                'item_id' => 5,
                'price' => '1800',
                'total_price' => '3600',
                'num' => 2,
            ],
            [
                'order_id' => 8,
                'item_id' => 1,
                'price' => '2000',
                'total_price' => '4000',
                'num' => 2,
            ],
            [
                'order_id' => 9,
                'item_id' => 6,
                'price' => '2000',
                'total_price' => '4000',
                'num' => 2,
            ],
            [
                'order_id' => 9,
                'item_id' => 1,
                'price' => '2000',
                'total_price' => '2000',
                'num' => 1,
            ],
            [
                'order_id' => 10,
                'item_id' => 4,
                'price' => '2000',
                'total_price' => '2000',
                'num' => 1,
            ],
            [
                'order_id' => 10,
                'item_id' => 5,
                'price' => '1800',
                'total_price' => '3600',
                'num' => 2,
            ],
        ]);
    }
}
