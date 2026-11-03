<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Vendor\RegisterController;
use App\Http\Controllers\VendorController;

/*
|--------------------------------------------------------------------------
| Beranda
|--------------------------------------------------------------------------
*/
Route::get('/', fn () => view('beranda'))->name('beranda');

/*
|--------------------------------------------------------------------------
| Publik: daftar vendor (katalog)
|--------------------------------------------------------------------------
*/
Route::get('/vendors', [VendorController::class, 'index'])->name('vendor.index');
Route::get('/vendors/{id}', [VendorController::class, 'show'])->name('vendor.show');

/*
|--------------------------------------------------------------------------
| Tamu (belum login): masuk & daftar
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    // Login (pelanggan, vendor, admin)
    Route::get('/masuk', [LoginController::class, 'create'])->name('masuk');
    Route::post('/masuk', [LoginController::class, 'proses'])
        ->name('masuk.proses')
        ->middleware('throttle:5,1');

    // Daftar pelanggan
    Route::get('/daftar', [DaftarController::class, 'create'])->name('daftar');
    Route::post('/daftar', [DaftarController::class, 'store'])
        ->name('daftar.store')
        ->middleware('throttle:10,1');

    // Daftar vendor (halaman yang sudah ada)
    Route::get('/vendor/register', [RegisterController::class, 'create'])->name('vendor.register');
    Route::post('/vendor/register', [RegisterController::class, 'store'])->middleware('throttle:10,1');
});

/*
|--------------------------------------------------------------------------
| Sudah login
|--------------------------------------------------------------------------
*/
Route::post('/keluar', [LoginController::class, 'keluar'])->middleware('auth')->name('keluar');

/*
| Aktifkan setelah middleware CekRole dibuat dan alias 'role' didaftarkan
| di bootstrap/app.php, lalu isi dengan route dashboard masing-masing.
|
| Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
|     // route admin
| });
|
| Route::middleware(['auth', 'role:vendor'])->prefix('vendor')->group(function () {
|     // route dashboard vendor (jangan menimpa /vendor/register di atas)
| });
*/