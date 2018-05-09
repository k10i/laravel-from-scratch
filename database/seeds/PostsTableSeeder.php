<?php

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
        $params = [
            [
                'title' => 'Laravel',
                'body' => 'Laravel Body',
            ],
            [
                'title' => 'Laracast',
                'body' => 'Laracast Body',
            ],
            [
                'title' => 'Vue.js',
                'body' => 'Vue.js Body',
            ],
        ];

        foreach ($params as $param) {
            DB::table('posts')->insert($param);
        }

    }
}
