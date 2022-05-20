<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        // Mengambil Data Artikel berdasarkan status publish
        $artikel = Article::query()->whereStatus('publish');
        // Mengambil data category
        $categories = Category::all();

        // Mencari data berdasarkan nilai search
        if (request('search')) {
            $artikel->where('title', 'LIKE', '%' . request('search') . '%');
        }
        $artikel = $artikel->latest()->paginate(4);
        $title = 'News - Home';
        return view('home.index', compact('artikel', 'title', 'categories'));
    }

    public function single($slug)
    {
        // Mengambil data Artikel berdasarkan slug
        $artikel = Article::where('slug', $slug)->first();
        // Mengambil data category
        $categories = Category::all();
        $title = 'News - ' . $artikel->title;
        return view('home.single', compact('artikel', 'categories', 'title'));
    }

    public function kategori(Category $category)
    {
        $artikel = $category->articles()->where('status', 'publish')->latest()->paginate(4);
        $categories = Category::all();

        // dd($artikel);
        return view('home.kategori', [
            'title' => 'News - Categories ' . $category->name,
            'artikel' => $artikel,
            'category' => $category->name,
        ], compact('categories'));
    }
}
