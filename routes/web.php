<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuratController;

// Route Mockup Baru
    Route::view('/', 'onboarding');
    Route::view('/onboarding', 'onboarding');
    Route::view('/warga', 'warga.halaman_utama')->name('halaman_utama'); //Lanjut ke views warga
    Route::view('/admin', 'admin.login'); //Lanjut ke views admin

    // ====================================================================== //

    // ----- Views Warga ----- //

        // Menu Profil Desa
        Route::view('/pengumuman-warga', 'warga.profil_desa.pengumuman');
        Route::view('/tentang-desa-rawapanjang', 'warga.profil_desa.tentang-desa');
        Route::view('/agenda-rawapanjang', 'warga.profil_desa.agenda');
        Route::view('/lapak-warga', 'warga.profil_desa.lapak');
        Route::view('/artikel-terkini', 'warga.profil_desa.artikel-terkini');

        // Masuk Menu Layanan Mandiri

        Route::get('/login', [LoginController::class, 'showNikForm'])->name('login');
        Route::post('/login/check-nik', [LoginController::class, 'checkNik'])->name('login.checkNik');
        Route::get('/login/pin/{nik}', [LoginController::class, 'showPinForm'])->name('login.showPinForm');
        Route::post('/login/check-pin', [LoginController::class, 'checkPin'])->name('login.checkPin');
        Route::get('/pilih-surat', [LoginController::class, 'showMenu'])->name('pilih-surat');

        // Layanan Mandiri - Input Form Surat
        Route::get('/surat-keterangan-domisili', [SuratController::class, 'form_Surat_Keterangan_Domisili']);
        Route::post('/submitForm', [SuratController::class, 'submitForm']);
        Route::get('/verifikasi', [SuratController::class, 'verifikasi']);
        Route::view('/verif', 'warga.layanan-mandiri.verif_surat');

        // Layanan Mandiri - Preview Surat
        Route::view('/skd', 'warga.layanan-mandiri.preview-surat.surat_ket_domisili');
        Route::view('/skp', 'warga.layanan-mandiri.preview-surat.surat_ket_pengantar');
        Route::view('/sk', 'warga.layanan-mandiri.preview-surat.surat_kuasa');

        // Layanan Mandiri - Verifikasi Surat
        // Route::view('/verifikasi', 'warga.layanan-mandiri.verif_surat');
        Route::view('/berhasil', 'warga.layanan-mandiri.berhasil');

    // ----- Ends of Views Warga ----- //

    // ====================================================================== //

    // ----- Views Admin Desa ----- //

        Route::view('/beranda', 'admin.beranda');
        Route::view('/info-desa', 'admin.info-desa');
        Route::view('/data-warga', 'admin.data-warga');
        Route::view('/statistik', 'admin.statistik');
        Route::view('/pengumuman', 'admin.pengumuman');
        Route::view('/artikel-desa', 'admin.artikel-desa');
        Route::view('/agenda', 'admin.agenda');
        Route::view('/pengaturan-akun', 'admin.pengaturan-akun');

        // Layanan Surat
            Route::view('/layanan-surat', 'admin.layanan-surat.dalam-proses');
            Route::view('/surat-ditolak', 'admin.layanan-surat.surat-ditolak');
            Route::view('/riwayat-surat', 'admin.layanan-surat.riwayat-surat');
            Route::view('/kelola-surat', 'admin.layanan-surat.kelola-surat');

        // Proses Surat
            Route::view('/verif-admin', 'admin.layanan-surat.proses-surat.verif-admin');
            Route::view('/persetujuan-kades', 'admin.layanan-surat.proses-surat.persetujuan-kades');
            Route::view('/surat-selesai', 'admin.layanan-surat.proses-surat.surat-selesai');

    // ----- Ends of Views Admin Desa ----- //


// ====================================================================== //