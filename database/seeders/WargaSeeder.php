<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Warga;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Warga::create([
            'nik' => '1234567890123456',
            'pin' => bcrypt('1234'), // Enkripsi PIN untuk keamanan
            'nama_lengkap' => 'John Doe',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '1990-01-01',
            'alamat' => 'Jl. Contoh No. 123',
            'rt' => '001',
            'rw' => '002'
        ]);
    }
}
