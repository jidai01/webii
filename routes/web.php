<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PinjamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main']);

Route::get('/home', [HomeController::class, 'home']);

Route::get('/biodata', [BiodataController::class, 'biodata']);

Route::get('/pinjam', [PinjamController::class, 'pinjam']);

Route::get('/anggota', [AnggotaController::class, 'anggota']);
Route::get('/tambah', [AnggotaController::class, 'tambah']);
Route::get('/kirim', [AnggotaController::class, 'kirim']);
Route::post('/kirim', [AnggotaController::class, 'kirim']);

Route::get('/buku', [BukuController::class, 'buku']);
Route::get('/tambahBuku', [BukuController::class, 'tambah']);
Route::get('/kirim', [BukuController::class, 'kirim']);
Route::post('/kirim', [BukuController::class, 'kirim']);