<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/articles', function () {
    return inertia('ArticlesList');
})->name('articles');

Route::get('/articles/{slug}', function () {
    return inertia('Article');
})->name('article');
