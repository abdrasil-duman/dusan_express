<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Cabinet\ProfileController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/about_us',[App\Http\Controllers\HomeController::class,'about_us'])->name('about_us');
Auth::routes();

Route::resource('/profile',ProfileController::class);


Route::middleware('role:admin')->prefix('admin_panel')->group(function () {
Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');
Route::resource('blog', BlogController::class);
Route::resource('tag', TagController::class);
Route::resource('type', TypeController::class);
Route::resource('category', CategoryController::class);
Route::resource('brand', BrandController::class);
Route::resource('product', ProductController::class);
});