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
        /*Article::factory(30)
            ->hasAttached(Tag::factory()->count(3)->create())->create();
        Comment::factory()->count(10)->create();
        State::factory()->count(30)->create();
        Tag::factory()->count(10)->create();*/
        $tags = Tag::factory()->count(10)->create();
        $articles = Article::factory(20)->create();

        $tags_id = $tags->pluck('id');

        $articles->each(function ($article) use ($tags_id) {
            $article->tags()->attach($tags_id->random(3));
            Comment::factory(3)->create([
                'article_id' => $article->id
            ]);

            State::factory(1)->create([
                'article_id' => $article->id
            ]);
        });
    }
}
