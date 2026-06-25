<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\PaymentsController;

// Halaman Utama
Route::get('/', fn() => view('index'))->name('index');

// Halaman Informasi
Route::get('/produk', fn() => view('produk'));
Route::get('/program', fn() => view('program'));

// Halaman Pilihan Camp (mengirim jenis ke halaman form)
Route::get('/BIE+VVIPCamp', fn() => view('BIE+VVIPCamp', ['jenis' => 'BIE+ VVIP Camp']));
Route::get('/BIE+VIPCamp', fn() => view('BIE+VIPCamp', ['jenis' => 'BIE+ VIP Camp']));
Route::get('/BIE+Barack', fn() => view('BIE+Barack', ['jenis' => 'BIE+ Barack']));


// Halaman Formulir Pendaftaran
Route::get('/formulir', [SewaController::class, 'formulir'])->name('formulirPendaftaran');

// Proses Simpan Data Formulir
Route::post('/formulir', [SewaController::class, 'store'])->name('formulirPendaftaran.store');

// Halaman Payment
Route::get('/payment', [SewaController::class, 'payment'])->name('payment');
Route::post('/payment', [SewaController::class, 'submitPayment'])->name('payment.submit');
Route::get('/payment/{id}', [PaymentsController::class, 'show'])->name('payment.show');
Route::post('/payment/{id}', [PaymentsController::class, 'storePayment'])->name('payment.store');

// Halaman Reservasi Khusus (jika digunakan untuk view tambahan)
Route::get('/reservation+VVIP', fn() => view('reservation+VVIP'));
Route::get('/reservation+VIP', fn() => view('reservation+VIP'));
Route::get('/reservation+Barack', fn() => view('reservation+Barack'));


