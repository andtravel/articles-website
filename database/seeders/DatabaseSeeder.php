<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use App\Models\State;
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
        Article::factory(30)
            ->hasAttached(Tag::factory()->count(3))->create();
        Comment::factory()->count(10)->create();
        State::factory()->count(10)->create();
        Tag::factory()->count(10)->create();
    }
}
