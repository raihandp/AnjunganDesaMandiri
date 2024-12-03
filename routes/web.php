<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Surat_Digital\skDomisiliController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SKDController;


// Route::get('/login', [LoginController::class, 'showNikForm'])->name('login.showNikForm');
// Route::post('/login/check-nik', [LoginController::class, 'checkNik'])->name('login.checkNik');
// Route::get('/login/pin/{nik}', [LoginController::class, 'showPinForm'])->name('login.showPinForm');
// Route::post('/login/check-pin', [LoginController::class, 'checkPin'])->name('login.checkPin');

Route::view('/', 'halaman_utama');
Route::view('/layanan_digital', 'surat_digital');
Route::view('/profil_desa', 'profil_desa');


Route::get('/skd', function () {
    return view('surat-surat.surat_ket_domisili');
});
Route::get('/skp', function () {
    return view('surat-surat.surat_ket_pengantar');
});
Route::get('/sk', function () {
    return view('surat-surat.surat_kuasa');
});
Route::get('/verif', function () {
    return view('verif_surat');
});
// routes/web.php
Route::get('/preview-surat', 'SKDController@preview')->name('preview.surat');
Route::get('/berhasil', function () {
    return view('berhasil');
});

Route::get('/surat_keterangan_domisili', [skDomisiliController::class, 'showForm']);
// Route::post('/sk-domisili/submit', [skDomisiliController::class, 'submitForm']);

// Route::get('/surat-domisili', [SuratController::class, 'showForm'])->name('surat.showForm');
// Route::post('/sk-domisili/submit', [SuratController::class, 'submitForm'])->name('surat.submitForm');

// Route::get('/surat_keterangan_domisili', function () {
//     return view('surat_digital.skd');
// });

Route::view('/tentang_kami', 'profil_desa.tentang_kami');
Route::view('/visi_misi', 'profil_desa.visi_misi');
Route::view('/sejarah_desa', 'profil_desa.sejarah_desa');