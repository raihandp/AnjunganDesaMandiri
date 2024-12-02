<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Surat_Digital\skDomisiliController;
use App\Http\Controllers\SuratController;


// Route::get('/login', [LoginController::class, 'showNikForm'])->name('login.showNikForm');
// Route::post('/login/check-nik', [LoginController::class, 'checkNik'])->name('login.checkNik');
// Route::get('/login/pin/{nik}', [LoginController::class, 'showPinForm'])->name('login.showPinForm');
// Route::post('/login/check-pin', [LoginController::class, 'checkPin'])->name('login.checkPin');

Route::get('/', function () {
    return view('halaman_utama');
})->name('halaman_utama');

Route::get('/layanan_digital', function () {
    return view('surat_digital');
});

Route::get('/profil_desa', function () {
    return view('profil_desa');
});

Route::get('/skd', function () {
    return view('surat-surat.surat_ket_domisili');
});

Route::get('/surat_keterangan_domisili', [skDomisiliController::class, 'showForm']);
// Route::post('/sk-domisili/submit', [skDomisiliController::class, 'submitForm']);

// Route::get('/surat-domisili', [SuratController::class, 'showForm'])->name('surat.showForm');
// Route::post('/sk-domisili/submit', [SuratController::class, 'submitForm'])->name('surat.submitForm');

// Route::get('/surat_keterangan_domisili', function () {
//     return view('surat_digital.skd');
// });

Route::get('/tentang_kami', function () {
    return view('profil_desa.tentang_kami');
});

Route::get('/visi_misi', function () {
    return view('profil_desa.visi_misi');
});

Route::get('/sejarah_desa', function () {
    return view('profil_desa.sejarah_desa');
});