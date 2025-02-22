<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a single user with a unique email and posts
        $user = User::factory()->create([ 
            'name' => 'Test User',
            'email' => 'test' . now()->timestamp . '@example.com',  // Unique email
        ]);

        // Create 5 posts associated with the user
        Post::factory(5)->create(['user_id' => $user->id]);

        // Alternatively, create multiple users and their posts
        User::factory(10)->create()->each(function ($user) {
            Post::factory(5)->create(['user_id' => $user->id]);
        });
    }
}
