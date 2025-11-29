<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;
use App\Models\Course;
use App\Models\News;

class OrderController extends Controller
{
    public function home()
    {
        $courses = Course::all();
        $coaches = Coach::all();
        $news    = News::latest()->take(5)->get(); // ambil 5 berita terbaru

        return view('home', compact('courses', 'coaches', 'news'));
    }
}
