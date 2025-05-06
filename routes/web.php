<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterSiswaController;
use App\Http\Controllers\Auth\RegisterGuruController;
use Illuminate\Support\Facades\Auth;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// ========== Siswa ==========
// Form register siswa
Route::get('/register/siswa', function () {
    return view('auth.register-siswa');
})->name('register.siswa');

// Proses register siswa
Route::post('/register/siswa', [RegisterSiswaController::class, 'store']);

// Dashboard siswa (pakai guard siswa)
Route::middleware(['auth:siswa'])->group(function () {
    Route::get('/dashboard/siswa', function () {
        return view('dashboard-siswa');
    })->name('dashboard.siswa');
});

// ========== Guru ==========
// Form register guru
Route::get('/register/guru', function () {
    return view('auth.register-guru');
})->name('register.guru');

// Proses register guru
Route::post('/register/guru', [RegisterGuruController::class, 'store']);

// Dashboard guru (pakai guard guru)
Route::middleware(['auth:guru'])->group(function () {
    Route::get('/dashboard/guru', function () {
        return view('dashboard-guru');
    })->name('dashboard.guru');
});

// ========== Admin/Default Jetstream User ==========
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
