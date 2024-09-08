<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserContoller;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function () {
    Route::get('food-beverage', [ProductController::class, 'foodBeverage'])->name('product.food-beverage');
    Route::get('beauty-health', [ProductController::class, 'beautyHealth'])->name('products.beauty-health');
    Route::get('home-care', [ProductController::class, 'homeCare'])->name('products.home-care');
    Route::get('baby-kid', [ProductController::class, 'babyKid'])->name('products.baby-kid');
});

Route::get('user/{id}/name/{name}', [UserContoller::class, 'show'])->name('user.profile');

Route::get('penjualan', [SalesController::class, 'index'])->name('sales.index');