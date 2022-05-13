<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        // $artikel = Article::all('user', 'category');
        $artikel = Article::with(['user', 'category'])->paginate(5);
        return view('dashboard.article', [
            'artikel' => $artikel,
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        // return $categories;
        return view('dashboard.article_add', [
            'category' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        // return $request->file('image')->store('article-images');
        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'image' => $request->file('image')->store('article-images'),
            'author_id' => auth()->user()->id,
            'category_id' => $request->category,
            'status' => $request->status,
        ]);

        return redirect('/article');
    }

    public function edit(Request $request, $slug)
    {
        $artikel = Article::where('slug', $slug)->first();
        // $artikel = Article::all();
        $kategori = Category::all();
        return view('dashboard.article_edit', compact('artikel', 'kategori'));
    }

    public function update(Request $request, $slug)
    {
        $artikel = Article::where('slug', $slug)->first();
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'author_id' => auth()->user()->id,
            'category_id' => $request->category,
            'status' => $request->status,
            // 'image' => $request->file('image')->store('article-images'),
        ];

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $data['image'] = $request->file('image')->store('article-images');
        }

        $artikel->update($data);


        return redirect('/article');
    }

    // Delete or Drop Data
    public function destroy($slug)
    {
        $artikel = Article::where('slug', $slug)->first();
        if ($artikel->image) {
            Storage::delete($artikel->image);
        }
        $artikel->delete($artikel);
        return redirect('/article');
    }
}
