<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        $qtyUserID=5;
        $userIDAdmin=$qtyUserID+1;
        User::factory($qtyUserID)->create();
        DB::table('users')->insert([
            'id' =>$userIDAdmin,
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => 1
        ]);
        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming',
        ]);
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal',
        ]);
        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design',
        ]);
        
        Post::factory(1000)->create();
        
    }
}
