<?php

namespace App\Http\Controllers\Surat_Digital;

use App\Http\Controllers\Controller;
use App\Models\sk_Domisili;
use Illuminate\Http\Request;

class skDomisiliController extends Controller
{
    public function showForm()
    {
        return view('surat_digital.skd');
    }

    public function submitForm(Request $request)
    {
        // Validasi input data
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik' => 'required|numeric',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric',
            // 'desa' => 'required|string|max:255',
            'keperluan' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        sk_Domisili::dd($request->all());

        return redirect('/sk-domisili')->with('success', 'Data berhasil disimpan');
        dd($request->all());
    }
}