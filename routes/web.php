<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\UserController;

// Halaman utama langsung ke dashboard
Route::get('/', function () {
    return view('dashboard'); // Breeze otomatis bikin view ini
})->middleware(['auth'])->name('dashboard');

// Resource untuk Buku Tamu dan Users
Route::resource('buku-tamu', BukuTamuController::class)->middleware(['auth']);
Route::resource('users', UserController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
