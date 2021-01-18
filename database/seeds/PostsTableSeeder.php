<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataSet = [
            [
                'user_id' => 1,
                'body' => '初投稿です！',
            ],
            [
                'user_id' => 1,
                'body' => '自動でデータを入れました',
            ],
            [
                'user_id' => 2,
                'body' => 'ID: 2 のユーザーの投稿です',
            ],
        ];

        foreach ($dataSet as $data) {
            Post::create($data);
        }
    }
}
