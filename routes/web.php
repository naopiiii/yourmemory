<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Good point
Route::get('/gp', function () {return view('gp.gp');});
Route::get('/gp/show', function () {return view('gp.gp_show');});
Route::get('/gp/edit', function () {return view('gp.gp_edit');});
Route::get('/gp/create', function () {return view('gp.gp_create');});

// Thank you
Route::get('/ty', function () {return view('ty.ty');});
Route::get('/ty/show', function () {return view('ty.ty_show');});
Route::get('/ty/edit', function () {return view('ty.ty_edit');});
Route::get('/ty/create', function () {return view('ty.ty_create');});

// Picture memory
Route::get('/pm', function () {return view('pm.pm');});
Route::get('/pm/show', function () {return view('pm.pm_show');});
Route::get('/pm/edit', function () {return view('pm.pm_edit');});
Route::get('/pm/create', function () {return view('pm.pm_create');});

// Wish list
Route::get('/wl', function () {return view('wl.wl');});
Route::get('/wl/show', function () {return view('wl.wl_show');});
Route::get('/wl/edit', function () {return view('wl.wl_edit');});
Route::get('/wl/create', function () {return view('wl.wl_create');});

// mypage
Route::get('/mp', function () {return view('mp.mp');});
Route::get('/mp/edit', function () {return view('mp.mp_edit');});

