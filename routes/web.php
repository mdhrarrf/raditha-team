<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\UserController;

// Halaman utama langsung ke dashboard
Route::get('/', function () {
<<<<<<< HEAD
    return view('dashboard'); // Breeze otomatis bikin view ini
})->middleware(['auth'])->name('dashboard');

// Resource untuk Buku Tamu dan Users
Route::resource('buku-tamu', BukuTamuController::class)->middleware(['auth']);
Route::resource('users', UserController::class)->middleware(['auth']);
=======
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
>>>>>>> main

require __DIR__.'/auth.php';
