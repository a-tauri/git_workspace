<?php

use Illuminate\Database\Seeder;

class NewblogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('newblogs')->insert([
            'category_id' => 0,
            'user_id' => 0,
            'title' => 'Laravelテスト投稿',
            'message' => 'Laravelシーダーファイルによる投稿',
        ]);
    }
}
