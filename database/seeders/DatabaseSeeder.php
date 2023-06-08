<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Page;
use App\Models\PageCategories;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*\App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('123456'),
        ]);

        \App\Models\User::factory(10)->create();*/

        /*PageCategories::factory()->create([
            'title' => 'System',
            'status' => 1,
            'parent_id' => 0
        ]);

        PageCategories::factory()->create([
            'title' => 'News',
            'status' => 1,
            'parent_id' => 0
        ]);

        PageCategories::factory()->create([
            'title' => 'Blogs',
            'status' => 1,
            'parent_id' => 0
        ]);*/
        //Page::factory(100)->create();
        Comment::factory(100)->create();
    }
}
