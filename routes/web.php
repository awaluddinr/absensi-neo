<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{BackController, AbsensiController, ClientController, LaporanController,};

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/login-admin', [BackController::class, 'login_admin'])->name('login-admin');
Route::post('/proses-login', [BackController::class, 'post_login'])->name('proses-login');
// dashboard route
Route::group(['prefix' => '/dashboard'], function () {
    Route::get('/', [BackController::class, 'index'])->name('dashboard');
    Route::get('/data-karyawan', [BackController::class, 'data_karyawan'])->name('data-karyawan');

    Route::group(['prefix' => '/absensi'], function () {
        Route::get('/daftar-absensi', [AbsensiController::class, 'daftar_absensi'])->name('daftar-absensi');
        Route::get('/daftar-absensi-user', [AbsensiController::class, 'daftar_absensi_user'])->name('daftar-absensi-user');
    });

    Route::group(['prefix' => '/laporan'], function () {
        Route::get('/daftar-laporan', [LaporanController::class, 'daftar_laporan'])->name('daftar-laporan');
        Route::get('/daftar-laporan-user', [LaporanController::class, 'daftar_laporan_user'])->name('daftar-laporan-user');
    });
});

// client route

Route::group(['prefix' => '/client'], function () {
    Route::get('/', [ClientController::class, 'index'])->name(('client'));
    Route::get('/absen', [ClientController::class, 'absen'])->name(('absen'));
    Route::get('/kegiatan', [ClientController::class, 'kegiatan'])->name(('kegiatan'));
});
