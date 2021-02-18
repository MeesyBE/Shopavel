<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PluginController;
use App\Http\Controllers\CategoryController;

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

Route::get('/admin/pages', [PageController::class, 'list'])->name('pages.index');
Route::get('/admin/pages/new', [PageController::class, 'new'])->name('pages.new');
Route::post('/admin/pages/create', [PageController::class, 'create'])->name('pages.create');
Route::get('/admin/pages/edit/{id}', [PageController::class, 'edit'])->name('pages.edit');
Route::post('/admin/pages/save', [PageController::class, 'save'])->name('pages.save');


Route::get('/admin/products', [ProductController::class, 'list'])->name('products.index');
Route::get('/admin/products/new', [ProductController::class, 'new'])->name('products.new');
Route::post('/admin/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/admin/products/save', [ProductController::class, 'save'])->name('products.save');

Route::get('/admin/categories', [CategoryController::class, 'list'])->name('categories.index');
Route::get('/admin/categories/new', [CategoryController::class, 'new'])->name('categories.new');
Route::post('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/admin/categories/save', [CategoryController::class, 'save'])->name('categories.save');

Route::get('/admin/plugins', [PluginController::class, 'list'])->name('plugins.index');


Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
