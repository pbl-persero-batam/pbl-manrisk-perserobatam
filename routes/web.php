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
    return view('index');
});

// Login & Register
Route::view('/login', 'Auth/login');
Route::view('/register', 'Auth/register');

// Dashboard
Route::view('/dashboard', 'Dashboard/dashboard');
Route::view('/laporan-hasil-audit', 'Dashboard/laporan-hasil-audit');

// Laporan
Route::view('/laporan-kegiatan-spi', 'Laporan/laporan-kegiatan-spi');
