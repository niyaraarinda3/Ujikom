<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\DaftarHotelController;
use App\Http\Controllers\DaftarHargaController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\TentangController;


Route::get('/', [HotelController::class, 'viewHome'])->name('home.hotel');

Route::get('/daftar-hotel', [DaftarHotelController::class, 'viewDaftarHotel'])->name('daftar.hotel');

Route::get('/daftar-harga', [DaftarHargaController::class, 'viewDaftarHarga'])->name('harga.hotel');

Route::get('/pemesanan', [PemesananController::class, 'viewPemesanan'])->name('pemesanan.hotel');
Route::post('/pemesanan', [PemesananController::class, 'createPemesanan'])->name('create-pemesanan.hotel');

Route::get('/tentang', [TentangController::class, 'viewTentang'])->name('tentang.hotel');