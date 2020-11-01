<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'name' => '冨岡義勇',
                'email' => 'mizu@mizu.com',
                'contact_status' => 1,
                'title' => '領収書について',
                'body' => '領収書を発行できますか？',
            ],
            [
                'name' => '宇髄天元',
                'email' => 'oto@oto.com',
                'contact_status' => 1,
                'title' => '注文キャンセルについて',
                'body' => '注文はキャンセルできますか？',
            ],
            [
                'name' => '時透無一郎',
                'email' => 'kasumi@kasumi.com',
                'contact_status' => 1,
                'title' => '配送先について',
                'body' => '注文後に配送先を変更できますか？',
            ],
            [
                'name' => '甘露寺蜜璃',
                'email' => 'koi@koi.com',
                'contact_status' => 2,
                'title' => '配送日について',
                'body' => '配送日を指定できますか？',
            ],
            [
                'name' => '悲鳴嶼行冥',
                'email' => 'iwa@iwa.com',
                'contact_status' => 2,
                'title' => '発送について',
                'body' => '注文から発送までどれくらいかかりますか？',
            ],
        ]);
    }
}
