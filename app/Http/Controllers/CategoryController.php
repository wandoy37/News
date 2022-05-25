<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use GuzzleHttp\Middleware;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            $categories = Category::where('name', 'LIKE', "%$request->search%")->paginate(5);
            return view('dashboard.category', [
                'data' => $categories
            ]);
        }
        $categories = Category::paginate(5);
        return view('dashboard.category', [
            'data' => $categories
        ]);
    }

    public function store(CategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
        ]);

        return redirect('admin/category');
    }

    public function edit($id)
    {
        $categories = Category::find($id);
        return view('dashboard.category_edit', compact('categories'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $categories = Category::find($id);

        $categories->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
        ]);
        return redirect('admin/category');
    }

    // Delete or Drop Data
    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect('admin/category');
    }
}
