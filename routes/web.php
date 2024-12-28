<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Surat_Digital\skDomisiliController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SKDController;

// Code Testing
Route::view('/test', 'admin.copy-proses-surat');
Route::view('/login2', 'layanan-mandiri.login.login-copy');

// Route Mockup Baru
Route::view('/', 'onboarding');
Route::view('/warga', 'warga.halaman_utama')->name('halaman_utama'); //Lanjut ke views warga
Route::view('/admin', 'admin.login'); //Lanjut ke views admin

// ====================================================================== //

// ----- Views Warga ----- //

// Menu Profil Desa
Route::view('/pengumuman', 'warga.profil_desa.pengumuman');
Route::view('/tentang-desa-rawapanjang', 'warga.profil_desa.tentang-desa');
Route::view('/agenda-rawapanjang', 'warga.profil_desa.agenda');
Route::view('/lapak-warga', 'warga.profil_desa.lapak');
Route::view('/artikel-terkini', 'warga.profil_desa.artikel-terkini');

// Masuk Menu Layanan Mandiri
Route::view('/login-nik', 'warga.layanan-mandiri.login.nik');
Route::view('/login-pin', 'warga.layanan-mandiri.login.pin');
Route::view('/pilih-surat', 'warga.layanan-mandiri.pilih-surat');

// Layanan Mandiri - Input Form Surat
Route::view('/surat-keterangan-domisili', 'warga.layanan-mandiri.form-surat.surat-keterangan-domisili');

// Layanan Mandiri - Preview Surat
Route::view('/skd', 'warga.layanan-mandiri.preview-surat.surat_ket_domisili');
Route::view('/skp', 'warga.layanan-mandiri.preview-surat.surat_ket_pengantar');
Route::view('/sk', 'warga.layanan-mandiri.preview-surat.surat_kuasa');

// Layanan Mandiri - Verifikasi Surat
Route::view('/verifikasi', 'warga.layanan-mandiri.verif_surat');
Route::view('/berhasil', 'warga.layanan-mandiri.berhasil');

// ----- Ends of Views Warga ----- //

// ====================================================================== //

// ----- Views Warga ----- //

Route::view('/beranda', 'admin.beranda');


// ----- Ends of Views Warga ----- //












// Menu Login
Route::get('/login', [LoginController::class, 'showNikForm'])->name('login.showNikForm');
Route::post('/login/check-nik', [LoginController::class, 'checkNik'])->name('login.checkNik');
Route::get('/login/pin/{nik}', [LoginController::class, 'showPinForm'])->name('login.showPinForm');
Route::post('/login/check-pin', [LoginController::class, 'checkPin'])->name('login.checkPin');

// Fitur utama
Route::view('/', 'halaman_utama')->name('halaman_utama');
Route::view('/layanan_digital', 'other.surat_digital');
Route::view('/profil_desa', 'other.profil_desa');

// Preview Surat
// use -- Route::view('/skd', 'preview_surat.surat_ket_domisili');
// use -- Route::view('/skp', 'preview_surat.surat_ket_pengantar');
// use -- Route::view('/sk', 'preview_surat.surat_kuasa');

// Halaman Verifikasi Surat
// use -- Route::view('/verif', 'other.verif_surat');
// use -- Route::view('/berhasil', 'other.berhasil');

// Route::get('/preview-surat', 'SKDController@preview')->name('preview.surat');

Route::get('/surat_keterangan_domisili', [skDomisiliController::class, 'showForm']);
// Route::post('/sk-domisili/submit', [skDomisiliController::class, 'submitForm']);

// Route::get('/surat-domisili', [SuratController::class, 'showForm'])->name('surat.showForm');
// Route::post('/sk-domisili/submit', [SuratController::class, 'submitForm'])->name('surat.submitForm');

// Route::get('/surat_keterangan_domisili', function () {
//     return view('surat_digital.skd');
// });

// Halaman Profil Desa
Route::view('/tentang_kami', 'profil_desa.tentang_kami');
Route::view('/visi_misi', 'profil_desa.visi_misi');
Route::view('/sejarah_desa', 'profil_desa.sejarah_desa');