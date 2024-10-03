<?php

use App\Http\Controllers\Surat_Digital\skDomisiliController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halaman_utama');
});

Route::get('/layanan_digital', function () {
    return view('surat_digital');
});

Route::get('/profil_desa', function () {
    return view('profil_desa');
});

Route::get('/surat_keterangan_domisili', [skDomisiliController::class, 'showForm']);
Route::post('/sk-domisili/submit', [skDomisiliController::class, 'submitForm']);

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