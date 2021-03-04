<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PluginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\FrontendController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/admin/test', function () {
    return view('layouts.shopavel');
})->middleware('auth');

Route::get('/admin/docs', function () {
    return view('docs');
})->middleware('auth');

Route::get('/admin/pages', [PageController::class, 'list'])->middleware('auth')->name('pages.index');
Route::get('/admin/pages/new', [PageController::class, 'new'])->middleware('auth')->name('pages.new');
Route::post('/admin/pages/create', [PageController::class, 'create'])->middleware('auth')->name('pages.create');
Route::get('/admin/pages/edit/{id}', [PageController::class, 'edit'])->middleware('auth')->name('pages.edit');
Route::post('/admin/pages/save/{id}', [PageController::class, 'save'])->middleware('auth')->name('pages.save');


Route::get('/admin/products', [ProductController::class, 'list'])->middleware('auth')->name('products.index');
Route::get('/admin/products/new', [ProductController::class, 'new'])->middleware('auth')->name('products.new');
Route::post('/admin/products/create', [ProductController::class, 'create'])->middleware('auth')->name('products.create');
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->middleware('auth')->name('products.edit');
Route::post('/admin/products/save/{id}', [ProductController::class, 'save'])->middleware('auth')->name('products.save');

Route::get('/admin/categories', [CategoryController::class, 'list'])->middleware('auth')->name('categories.index');
Route::get('/admin/categories/new', [CategoryController::class, 'new'])->middleware('auth')->name('categories.new');
Route::post('/admin/categories/create', [CategoryController::class, 'create'])->middleware('auth')->name('categories.create');
Route::get('/admin/categories/edit/{id}', [CategoryController::class, 'edit'])->middleware('auth')->name('categories.edit');
Route::post('/admin/categories/save/{id}', [CategoryController::class, 'save'])->middleware('auth')->name('categories.save');

Route::get('/admin/plugins', [PluginController::class, 'list'])->middleware('auth')->name('plugins.index');

Route::get('/admin/users', [UserController::class, 'list'])->middleware('auth')->name('users.index');
Route::get('/admin/users/profile', [UserController::class, 'profile'])->middleware('auth')->name('users.profile');

Route::get('/admin/settings', [SettingController::class, 'index'])->middleware('auth')->name('settings.index');
Route::post('/admin/settings/save', [SettingController::class, 'save'])->middleware('auth')->name('settings.save');



Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/', [FrontendController::class, 'index'])->name('frontend.home');
Route::get('/{urlkey}', [FrontendController::class, 'index'])->name('frontend.index');
