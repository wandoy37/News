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
        // $artikel = Article::latest()->where('status', 'publish')->paginate(2);

        // Method bang Duki 1st
        $artikel = Article::query()->whereStatus('publish');
        // Mengambil data category
        $category = Category::all();
        // Mencari data berdasarkan nilai search
        if (request('search')) {
            $artikel->where('title', 'LIKE', '%' . request('search') . '%');
        }
        $artikel = $artikel->latest()->paginate(2);

        // Method Testing Bang Duki
        // function SqlWithBinding($sql, $bindDataArr)
        // {
        //     foreach ($bindDataArr as $binding) {
        //         $value = is_numeric($binding) ? $binding : "'" . $binding . "'";
        //         $sql = preg_replace('/\?/', $value, $sql, 1);
        //     }
        //     return $sql;
        // }
        // return SqlWithBinding($artikel->latest()->toSql(), $artikel->getBindings());
        return view('home.index', compact('artikel', 'category'));
    }

    public function single($slug)
    {
        // Mengambil data Artikel berdasarkan slug
        $artikel = Article::where('slug', $slug)->first();
        // Mengambil data category
        $category = Category::all();
        return view('home.single', compact('artikel', 'category'));
    }
}
