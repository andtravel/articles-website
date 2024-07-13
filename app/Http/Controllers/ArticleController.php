<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::allPaginate()->paginate(10);
        $tags = Tag::all( 'label');
        return inertia('ArticlesList', compact('articles', 'tags'));
    }
}
