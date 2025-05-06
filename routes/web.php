<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PengarangController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PinjamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home']);

Route::get('/home', [HomeController::class, 'home']);

Route::get('/biodata', [BiodataController::class, 'biodata']);

Route::get('/pinjam', [PinjamController::class, 'pinjam']);

Route::get('/anggota', [AnggotaController::class, 'anggota']);
Route::get('/tambahAnggota', [AnggotaController::class, 'tambah']);
Route::post('/kirimAnggota', [AnggotaController::class, 'kirim']);
Route::get('/editAnggota/{id}', [AnggotaController::class, 'edit']);
Route::post('/updateAnggota', [AnggotaController::class, 'update']);
Route::get('/deleteAnggota/{id}', [AnggotaController::class, 'delete']);

Route::get('/buku', [BukuController::class, 'buku']);
Route::get('/tambahBuku', [BukuController::class, 'tambah']);
Route::post('/kirimBuku', [BukuController::class, 'kirim']);
Route::get('/editBuku/{id}', [BukuController::class, 'edit']);
Route::post('/updateBuku', [BukuController::class, 'update']);
Route::get('/deleteBuku/{id}', [BukuController::class, 'delete']);

Route::get('/pengarang', [PengarangController::class, 'pengarang']);
Route::get('/tambahPengarang', [PengarangController::class, 'tambah']);
Route::post('/kirimPengarang', [PengarangController::class, 'kirim']);
Route::get('/editPengarang/{id}', [PengarangController::class, 'edit']);
Route::post('/updatePengarang', [PengarangController::class, 'update']);
Route::get('/deletePengarang/{id}', [PengarangController::class, 'delete']);

Route::get('/penerbit', [PenerbitController::class, 'penerbit']);
Route::get('/tambahPenerbit', [PenerbitController::class, 'tambah']);
Route::post('/kirimPenerbit', [PenerbitController::class, 'kirim']);
Route::get('/editPenerbit/{id}', [PenerbitController::class, 'edit']);
Route::post('/updatePenerbit', [PenerbitController::class, 'update']);
Route::get('/deletePenerbit/{id}', [PenerbitController::class, 'delete']);

Route::get('/bukuPenerbit/{id}', [BukuController::class, 'byPenerbit']);