<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

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
});
