<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // NewsController.php
    public function show(News $news) // Laravel otomatis inject model News yang cocok
    {
        // $news    = News::latest()->take(5)->get();
        // Tidak perlu query manual lagi, datanya sudah ada di variabel $news
        return view('news.show', compact('news'));
    }
}
