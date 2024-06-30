<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaporanHasilAuditController;
use App\Http\Controllers\TemuanController;
use App\Http\Controllers\HalPerluDiperhatikanController;
use App\Http\Controllers\RecomendedController;
use App\Http\Controllers\TindakLanjutController;
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
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'Dashboard/dashboard')->name('dashboard');

    Route::prefix('audit')->name('audit.')->group(function () {
        Route::get('laporan-hasil-audit', [LaporanHasilAuditController::class, 'index'])->name('index');
        Route::get('laporan-hasil-audit/{id}/show', [LaporanHasilAuditController::class, 'show'])->name('show');
        Route::get('laporan-hasil-audit/{id}/edit', [LaporanHasilAuditController::class, 'edit'])->name('edit');
        Route::get('laporan-hasil-audit/create', [LaporanHasilAuditController::class, 'create'])->name('create');
        Route::post('laporan-hasil-audit/store', [LaporanHasilAuditController::class, 'store'])->name('store');
        Route::put('laporan-hasil-audit/{id}/update', [LaporanHasilAuditController::class, 'update'])->name('update');
        Route::delete('laporan-hasil-audit/destroy', [LaporanHasilAuditController::class, 'destroy'])->name('destroy');

        Route::get('temuan/{audit}', [TemuanController::class, 'index'])->name('temuan.index');
        Route::get('temuan/{id}/show', [TemuanController::class, 'show'])->name('temuan.show');
        Route::get('temuan/{audit}/{id}/edit', [TemuanController::class, 'edit'])->name('temuan.edit');
        Route::get('temuan/{audit}/create', [TemuanController::class, 'create'])->name('temuan.create');
        Route::post('temuan/{audit}/store', [TemuanController::class, 'store'])->name('temuan.store');
        Route::put('temuan/{audit}/{id}/update', [TemuanController::class, 'update'])->name('temuan.update');
        Route::delete('temuan/destroy', [TemuanController::class, 'destroy'])->name('temuan.destroy');

        Route::get('notice/{audit}', [HalPerluDiperhatikanController::class, 'index'])->name('notice.index');
        // Route::get('notice/{id}/show', [HalPerluDiperhatikanController::class, 'show'])->name('notice.show');
        Route::get('notice/{audit}/{id}/edit', [HalPerluDiperhatikanController::class, 'edit'])->name('notice.edit');
        Route::get('notice/{audit}/create', [HalPerluDiperhatikanController::class, 'create'])->name('notice.create');
        Route::post('notice/{audit}/store', [HalPerluDiperhatikanController::class, 'store'])->name('notice.store');
        Route::put('notice/{audit}/{id}/update', [HalPerluDiperhatikanController::class, 'update'])->name('notice.update');
        Route::delete('notice/destroy', [HalPerluDiperhatikanController::class, 'destroy'])->name('notice.destroy');

        Route::get('rekomendasi/{audit}', [RecomendedController::class, 'index'])->name('rekomendasi.index');
        // Route::get('rekomendasi/{id}/show', [RecomendedController::class, 'show'])->name('rekomendasi.show');
        Route::get('rekomendasi/{audit}/{id}/edit', [RecomendedController::class, 'edit'])->name('rekomendasi.edit');
        Route::get('rekomendasi/{audit}/create', [RecomendedController::class, 'create'])->name('rekomendasi.create');
        Route::post('rekomendasi/{audit}/store', [RecomendedController::class, 'store'])->name('rekomendasi.store');
        Route::put('rekomendasi/{audit}/{id}/update', [RecomendedController::class, 'update'])->name('rekomendasi.update');
        Route::delete('rekomendasi/destroy', [RecomendedController::class, 'destroy'])->name('rekomendasi.destroy');
    });

    Route::get('tindak-lanjut', [TindakLanjutController::class, 'index'])->name('tindak-lanjut.index');
    Route::get('tindak-lanjut/{audit}/show', [TindakLanjutController::class, 'show'])->name('tindak-lanjut.show');
    Route::post('tindak-lanjut/{audit}/update', [TindakLanjutController::class, 'update'])->name('tindak-lanjut.update');

    Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('laporan/{id}/show', [LaporanController::class, 'show'])->name('laporan.show');
    Route::get('laporan/{id}/edit', [LaporanController::class, 'edit'])->name('laporan.edit');
    Route::get('laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
    Route::post('laporan/store', [LaporanController::class, 'store'])->name('laporan.store');
    Route::put('laporan/{id}/update', [LaporanController::class, 'update'])->name('laporan.update');
    Route::delete('laporan/destroy', [LaporanController::class, 'destroy'])->name('laporan.destroy');

    Route::view('/modal', 'Dashboard/modal-laporan')->name('modal');
});


// Dashboard
// Route::view('/dashboard', 'Dashboard/dashboard');
// Route::view('/laporan-hasil-audit', 'Dashboard/laporan-hasil-audit');
// Temuan
// Route::view('/temuan', 'Dashboard/Temuan/temuan');
// Hal - Hal Yang Perlu Diperhatikan
// Route::view('/hal-hal-diperhatikan', 'Dashboard/Hal-Diperhatikan/hal-hal');
// Rekomendasi
// Route::view('/rekomendasi', 'Dashboard/Rekomendasi/rekomendasi');

// Tindak Lanjut
// Route::view('/tindak-lanjut', 'Tindak-Lanjut/tindak-lanjut');

// Laporan
// Route::view('/laporan-kegiatan-spi', 'Laporan/laporan-kegiatan-spi');
