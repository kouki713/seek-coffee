<?php

use Illuminate\Database\Seeder;

class ReceiptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receipts')->insert([
            [
                'item_id' => 1,
                'num' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 2,
                'num' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 3,
                'num' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 4,
                'num' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 5,
                'num' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 6,
                'num' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 1,
                'num' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
