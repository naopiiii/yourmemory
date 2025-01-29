<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ThankyouController;
use App\Http\Controllers\PicturememoryController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\MypageController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// how to
Route::get('/ht', function () {return view('ht');});

// Good point
Route::get('/gp', [PostController::class, 'index'])->name('gp.index');
Route::get('/gp/create', [PostController::class, 'create'])->name('gp.create');
Route::post('/gp', [PostController::class, 'store'])->name('gp.store');
Route::get('/gp/show', function () {return view('gp.gp_show');});
Route::get('/gp/edit', function () {return view('gp.gp_edit');});


// Thank you
Route::get('/ty', [ThankyouController::class, 'index'])->name('ty.index');
Route::get('/ty/create', [ThankyouController::class, 'create'])->name('ty.create');
Route::post('/ty', [ThankyouController::class, 'store'])->name('ty.store');
Route::get('/ty/show', function () {return view('ty.ty_show');});
Route::get('/ty/edit', function () {return view('ty.ty_edit');});

// Picture memory
Route::get('/pm', [PicturememoryController::class, 'index'])->name('pm.index');
Route::get('/pm/create', [PicturememoryController::class, 'create'])->name('pm.create');
Route::post('/pm', [PicturememoryController::class, 'store'])->name('pm.store');
Route::get('/pm/show', function () {return view('pm.pm_show');});
Route::get('/pm/edit', function () {return view('pm.pm_edit');});

// Wish list
Route::get('/wl', [WishlistController::class, 'index'])->name('wl.index');
Route::get('/wl/create', [wishlistController::class, 'create'])->name('wl.create');
Route::post('/wl', [WishlistController::class, 'store'])->name('wl.store');
Route::get('/wl/show', function () {return view('wl.wl_show');});
Route::get('/wl/edit', function () {return view('wl.wl_edit');});

// mypage
Route::get('/mp', [MypageController::class, 'index'])->name('mp.index');
Route::get('/mp/edit', function () {return view('mp.mp_edit');});

