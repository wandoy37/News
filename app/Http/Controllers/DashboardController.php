<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::paginate(3);
        $article = Article::paginate(3);
        return view('dashboard.home', [
            'category' => $categories,
            'artikel' => $article,
        ]);
    }
}
