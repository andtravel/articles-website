<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
//        $articles = Article::with('tags', 'state')->orderBy('created_at', 'desc')->limit(6)->get();
        $articles = Article::lastLimit(6)->get();
        return inertia('Home', compact('articles'));
    }
}
