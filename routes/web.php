<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Rating;
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
    $product = Product::all();
    $rating = Rating::all();
    return view('welcome',compact("product","rating"));
});

Route::get('/placetostay', function () {
    $product = Product::all();
    return view('welcome',compact("product"));
});

Route::get('/placetostay', function () {
    $product = Product::all();
    return view('welcome',compact("product"));
});

Auth::routes();

// User
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Mitra
Route::get('mitra/home', [HomeController::class, 'mitraHome'])->name('mitra.home')->middleware('is_mitra');

// Admin
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');