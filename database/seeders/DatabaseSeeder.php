<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Categories::factory(10)->create();
        $tags = Tag::factory(10)->create();
        $posts = Post::factory(10)->create();

        foreach ($posts as $post){
            $tagsId = $tags -> random(5) ->pluck('id');
            $post -> tags() -> attach($tagsId);
        }
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
