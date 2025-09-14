<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ArticlePublicController;

// ------------------
// Halaman Publik
// ------------------
Route::get('/', fn() => view('public.home'))->name('home');
Route::get('/about', fn() => view('public.about'))->name('about');
Route::get('/jasa', fn() => view('public.jasa'))->name('jasa');
Route::get('/pengacara', fn() => view('public.pengacara'))->name('pengacara');
Route::get('/hubungi', fn() => view('public.hubungi'))->name('hubungi');
// ------------------
// Artikel Publik
// ------------------
Route::get('/artikel', [ArticlePublicController::class, 'index'])->name('artikel.index');
Route::get('/artikel/{article}', [ArticlePublicController::class, 'show'])->name('artikel.show');

// ------------------
// Dashboard (default redirect login)
// ------------------
Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

// ------------------
// Halaman Admin
// ------------------
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    // CRUD Articles
    Route::resource('articles', ArticleController::class);

    // CRUD Users
    Route::resource('users', UserController::class);

    // Profile (opsional kalau mau user bisa ganti password sendiri)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
