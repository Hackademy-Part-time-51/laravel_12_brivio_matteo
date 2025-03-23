<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');

Route::resource('/articles', ArticleController::class);
