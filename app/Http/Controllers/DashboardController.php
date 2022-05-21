<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::count();
        $article = Article::count();
        return view('dashboard.home', [
            'category' => $categories,
            'artikel' => $article,
        ]);
    }
}
