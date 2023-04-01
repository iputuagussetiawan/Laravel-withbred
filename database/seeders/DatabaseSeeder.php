<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'id' => 100,
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'isAdmin' => 1
        ]);

        DB::table('users')->insert([
            'id' => 200,
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        DB::table('users')->insert([
            'id' => 300,
            'username' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        DB::table('posts')->insert([
            'user_id' => 100,
            'category_id'=>1,
            'title' => 'My First Post',
            'slug'=>'my-first-post',
            'body' => 'Lorem ipsum this is my post.',
            'excerpt'=>'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('posts')->insert([
            'user_id' => 200,
            'category_id'=>2,
            'title' => 'My First Post Dody',
            'slug'=>'my-first-post-dody',
            'body' => 'Lorem ipsum this is my post.',
            'excerpt'=>'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('follows')->insert([
            'user_id' => 200,
            'followeduser' => 100
        ]);

        DB::table('follows')->insert([
            'user_id' => 300,
            'followeduser' => 100
        ]);

        DB::table('follows')->insert([
            'user_id' => 300,
            'followeduser' => 200
        ]);

      

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming',
        ]);
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal',
        ]);
    }
}
