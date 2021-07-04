<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

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

// Auth Routes
Auth::routes();

// User
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/packages', [App\Http\Controllers\HomeController::class, 'home'])->name('packages');
Route::get('/search', [App\Http\Controllers\Controller::class, 'search'])->name('search');
Route::get('/detail', [App\Http\Controllers\Controller::class, 'detail'])->name('detail');
Route::get('/pembayaran', [App\Http\Controllers\Controller::class, 'pembayaran1'])->name('pembayaran-1');
Route::get('/pembayaran2', [App\Http\Controllers\Controller::class, 'pembayaran2'])->name('pembayaran-2');
Route::get('/pembayaran3', [App\Http\Controllers\Controller::class, 'pembayaran3'])->name('pembayaran-3');
Route::get('/pembayaran4', [App\Http\Controllers\Controller::class, 'pembayaran4'])->name('pembayaran-4');

// Mitra
Route::get('mitra/home', [HomeController::class, 'mitraHome'])->name('mitra.home')->middleware('is_mitra');

// Admin
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
