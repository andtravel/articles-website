<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\State;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::allPaginate()->paginate(10);
        $tags = Tag::all();
        return inertia('ArticlesList', compact('articles', 'tags'));
    }

    public function show($slug)
    {
        $article = Article::findBySlug($slug)->first();
        return inertia('Article', compact('article'));
    }

    public function allByTag(Tag $tag)
    {
        $articles = $tag->articles()->findByTag()->paginate(10);

        return inertia('ArticlesByTag', compact('articles', 'tag'));
    }

    public function commentStore(Request $request)
    {
        Comment::create([
            'subject' => $request->subject,
            'body' => $request->body,
            'article_id' => $request->article_id
        ]);

        return back();
    }

    public function likesIncrement(int $id)
    {
            $state = State::where('article_id', $id)->firstOrFail();
            $state->increment('likes');
            $state->save();
            return response()->json(['likes' => $state->likes]);
    }

    public function viewsIncrement(int $id)
    {
        $state = State::where('article_id', $id)->firstOrFail();
        $state->increment('views');
        $state->save();
        return response()->json(['views' => $state->views]);
    }
}
