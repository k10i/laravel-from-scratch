<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
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
                'body' => 'Laravel',
                'completed' => false,
            ],
            [
                'body' => 'Laracast',
                'completed' => false,
            ],
            [
                'body' => 'Vue.js',
                'completed' => true,
            ],
        ];

        foreach ($params as $param) {
            DB::table('tasks')->insert($param);
        }
    }
}
