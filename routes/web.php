<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Surat_Digital\skDomisiliController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SKDController;

//Code Testing
Route::view('/test', 'other._test');
Route::view('/login2', 'layanan-mandiri.login.login-copy');

Route::view('/', 'halaman_utama')->name('halaman_utama');
Route::view('/pengumuman', 'profil_desa.pengumuman');
Route::view('/tentang-desa-rawapanjang', 'profil_desa.tentang-desa');
Route::view('/agenda-rawapanjang', 'profil_desa.agenda');
Route::view('/lapak-warga', 'profil_desa.lapak');
Route::view('/artikel-terkini', 'profil_desa.artikel-terkini');

Route::view('/login-nik', 'layanan-mandiri.login.nik');
Route::view('/login-pin', 'layanan-mandiri.login.pin');
Route::view('/pilih-surat', 'layanan-mandiri.pilih-surat');


















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
Route::view('/skd', 'surat-surat.surat_ket_domisili');
Route::view('/skp', 'surat-surat.surat_ket_pengantar');
Route::view('/sk', 'surat-surat.surat_kuasa');

// Halaman Verifikasi Surat
Route::view('/verif', 'other.verif_surat');
Route::view('/berhasil', 'other.berhasil');

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