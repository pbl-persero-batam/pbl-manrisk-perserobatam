<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaporanController;
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
    return view('index');
});

// Login & Register
Route::view('/login', 'Auth/login')->name('login');
Route::view('/register', 'Auth/register')->name('register');

// Authentication Routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.post');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'Dashboard/dashboard')->name('dashboard');
    Route::view('/laporan-hasil-audit', 'Dashboard/laporan-hasil-audit')->name('laporan-hasil-audit');
    Route::view('/modal', 'Dashboard/modal-laporan')->name('modal');
});


// Dashboard
Route::view('/dashboard', 'Dashboard/dashboard');
Route::view('/laporan-hasil-audit', 'Dashboard/laporan-hasil-audit');
// Temuan
Route::view('/temuan', 'Dashboard/Temuan/temuan');
// Hal - Hal Yang Perlu Diperhatikan
Route::view('/hal-hal-diperhatikan', 'Dashboard/Hal-Diperhatikan/hal-hal');
// Rekomendasi
Route::view('/rekomendasi', 'Dashboard/Rekomendasi/rekomendasi');

// Tindak Lanjut
Route::view('/tindak-lanjut', 'Tindak-Lanjut/tindak-lanjut');

// Laporan
Route::view('/laporan-kegiatan-spi', 'Laporan/laporan-kegiatan-spi');
