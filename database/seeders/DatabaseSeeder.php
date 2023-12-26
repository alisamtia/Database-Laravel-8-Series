<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        user::factory(3);
        category::factory(30);
        Post::factory(5)->create(['user_id' => 3, "category_id" => 1]);
        Post::factory(30)->create();
    }
}




// Category::create([
//     'name' => 'Hobbies',
//     'slug'  => 'hobbies',
// ]);
// Category::create([
//     'name' => 'Sports',
//     'slug'  => 'sports',
// ]);
// Category::create([
//     'name' => 'Work',
//     'slug'  => 'work',
// ]);

// Post::create([
//     'title' => 'First Post',
//     'slug' => 'first-post',
//     'user_id' => 2,
//     'category_id' => 1,
//     'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqu...",
//     'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.            "
// ]);
// Post::create([
//     'title' => 'Second Post',
//     'slug' => 'second-post',
//     'user_id' => 2,
//     'category_id' => 2,
//     'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqu...",
//     'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.            "
// ]);
// Post::create([
//     'title' => 'Third Post',
//     'slug' => 'third-post',
//     'user_id' => 1,
//     'category_id' => 1,
//     'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqu...",
//     'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.            "
// ]);