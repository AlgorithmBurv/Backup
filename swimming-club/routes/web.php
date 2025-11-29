<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\NewsController;

// Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news/{news:slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/', [OrderController::class, 'home'])->name('home');
