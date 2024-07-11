<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home');
})->name('home');

Route::get('/articles', function () {
    return inertia('ArticlesList');
})->name('articles');

Route::get('/articles/{slug}', function () {
    return inertia('Article');
})->name('article');
