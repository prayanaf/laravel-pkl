<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SiswaController;
use App\Models\siswa;
use App\Models\guru;
use App\Models\pkl;
use App\Models\industri;


Route::post('/siswa/import', [SiswaController::class, 'import'])->name('siswa.import');
// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

Route::view('/siswa', 'siswa', ['siswa' => Siswa::all()])->name('siswa');
Route::view('/guru', 'guru', ['guru' => Guru::all()])->name('guru');
Route::view('/pkl', 'pkl', ['pkl' => Pkl::all()])->name('pkl');
Route::view('/industri', 'industri', ['industri' => Industri::all()])->name('industri');


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


