<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => '佐藤太郎',
            'email' => 'Sato@gmail.com',
            'is_teacher' => true,
            'password' => Hash::make('satotaro'), 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => '鈴木次郎',
            'email' => 'Suzuki@gmail.com',
            'is_teacher' => true,
            'password' => Hash::make('suzukijiro'), 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => '田中三郎',
            'email' => 'Tanaka@gmail.com',
            'is_teacher' => true,
            'password' => Hash::make('tanakasaburo'), 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => '山本四朗',
            'email' => 'Yamamoto@gmail.com',
            'is_teacher' => false,
            'password' => 'yamamotosiro', 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        DB::table('users')->insert([
            'name' => '中村五郎',
            'email' => 'Nakamura@gmail.com',
            'is_teacher' => false,
            'password' => 'nakamuragoro', 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => '小林六郎',
            'email' => 'Kobayashi@gmail.com',
            'is_teacher' => false,
            'password' => 'kobayashirokuro', 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => '加藤七郎',
            'email' => 'Kato@gmail.com',
            'is_teacher' => false,
            'password' => 'katonanaro', 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => '吉田八郎',
            'email' => 'Yoshida@gmail.com',
            'is_teacher' => false,
            'password' => 'yoshidahatiro', 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => '山田九郎',
            'email' => 'Yamada@gmail.com',
            'is_teacher' => false,
            'password' => 'yamadakuro', 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => '佐々木十郎',
            'email' => 'Sasaki@gmail.com',
            'is_teacher' => false,
            'password' => 'sasakijyuro', 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
