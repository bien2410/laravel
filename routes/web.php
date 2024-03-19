<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// VIEW ADMIN
Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/category', [AdminController::class, 'categoryManager']);
});
// VIEW Fontend
Route::prefix('/frontend')->group(function () {
    Route::get('/', [FrontendController::class, 'index']);
});
// CRUD category
Route::resource('category', CategoryController::class);
// CRUD product
Route::resource('product', ProductController::class);