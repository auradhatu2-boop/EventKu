<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendor\RegisterController;
use App\Http\Controllers\VendorController;

Route::get('/vendor/register', [RegisterController::class, 'create'])->name('vendor.register');
Route::post('/vendor/register', [RegisterController::class, 'store']);

Route::get('/vendors', [VendorController::class, 'index'])->name('vendor.index');
Route::get('/vendors/{id}', [VendorController::class, 'show'])->name('vendor.show');

Route::get('/masuk', fn () => view('masuk'))->name('masuk');
Route::post('/masuk', function () {
    // sementara kosong, logika login dibuat belakangan
})->name('masuk.proses');

use App\Http\Controllers\DaftarController;

Route::middleware('guest')->group(function () {
    Route::get('/daftar',  [DaftarController::class, 'create'])->name('daftar');
    Route::post('/daftar', [DaftarController::class, 'store'])->name('daftar.store')->middleware('throttle:10,1');
});

