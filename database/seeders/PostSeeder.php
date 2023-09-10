<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Hash;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('posts')->truncate();
        DB::table('posts')->insert([
            'homework_name' => '数学',
            'image_url' => 'test',
            'user_id' => 1,
            'category_id' => 1,
            'deadline' => '2023-09-11',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'homework_name' => '国語',
            'image_url' => 'test',
            'user_id' => 2,
            'category_id' => 1,
            'deadline' => '2023-09-11',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'homework_name' => '数学',
            'image_url' => 'test',
            'user_id' => 1,
            'category_id' => 1,
            'deadline' => '2023-09-14',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'homework_name' => '英語',
            'image_url' => 'test',
            'user_id' => 3,
            'category_id' => 1,
            'deadline' => '2023-09-15',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
