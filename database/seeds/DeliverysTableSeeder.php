<?php

use Illuminate\Database\Seeder;

class DeliverysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliveries')->insert([
            [
                'user_id' => 1,
                'address_name' => '山田花子',
                'postal_code' => '0098765',
                'address' => '千葉県浦安市舞浜１−１',
                'phone_number' => '08012345678',
            ],
            [
                'user_id' => 1,
                'address_name' => '煉獄杏寿郎',
                'postal_code' => '0012345',
                'address' => '東京都港区芝公園４丁目２−８',
                'phone_number' => '08098765432',
            ],
        ]);
    }
}
