<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/articles',[ArticleController::class, 'index'])->name('articles');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('article');
Route::post('/articles/comment', [ArticleController::class, 'commentStore'])->name('comment.store');
Route::get('/articles/tags/{tag}', [ArticleController::class, 'allByTag'])->name('articles.tag');
Route::put('/articles/{slug}/likes', [ArticleController::class, 'likesIncrement'])->name('article.like');
Route::put('/articles/{slug}/views', [ArticleController::class, 'viewsIncrement'])->name('article.view');
