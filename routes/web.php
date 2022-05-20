<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Home Pages
Route::get('/', [HomeController::class, 'index']);
// Single Pages
Route::get('/artikel/{slug}', [HomeController::class, 'single']);
// Category Pages
Route::get('/kategori/{category:slug}', [HomeController::class, 'kategori']);


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route Category
    // Menampilkan View Data Category
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    // Menampilkan View Tambah Data Category
    Route::get('/category/create', [CategoryController::class, 'create']);
    // // Membuat Data Category Baru
    Route::post('/category', [CategoryController::class, 'store']);
    // // Menampilkan Data Category berdasarkan id
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
    // // Update Data Cetegory Berdasarkan id
    Route::patch('/category/{id}', [CategoryController::class, 'update']);
    // // Menghapus Data Category Berdasarkan id
    Route::delete('category/{id}', [CategoryController::class, 'destroy']);

    // Route Article
    Route::get('/article', [ArticleController::class, 'index'])->name('article');
    // Menampilkan View Tambah Data Artikel
    Route::get('/article/create', [ArticleController::class, 'create']);
    // // Membuat Data Article Baru
    Route::post('/article', [ArticleController::class, 'store']);
    // // Menampilkan Data Artikel berdasarkan slug
    Route::get('/article/{slug}/edit', [ArticleController::class, 'edit'])->name('edit');
    // // Update Data Article Berdasarkan slug
    Route::patch('/article/{id}', [ArticleController::class, 'update']);
    // // Menghapus Data Artikel Berdasarkan id
    Route::delete('/article/{slug}', [ArticleController::class, 'destroy']);
});
