<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(DeliverysTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        // $this->call(CartTableSeeder::class);
        // $this->call(ReceiptTableSeeder::class);
        // $this->call(OrderTableSeeder::class);
        // $this->call(OrderDetailTableSeeder::class);
    }
}
