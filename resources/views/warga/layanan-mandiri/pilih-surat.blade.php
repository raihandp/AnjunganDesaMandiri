<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Mandiri - Anjungan Desa Mandiri Desa Rawapanjang</title>
    <link rel="icon" href="{{asset('assets/logo.png')}}" type="image/png">
    <style>
        body {
            font-family: sans-serif;
            background-image: url('{{ asset('assets/BackgroundMockupAnjungan.png') }}');
            background-size: cover;
            background-attachment: fixed; 
            background-position: center;
        }
        .page-content {
            padding: 30px 50px 0 50px;
        }
        .button-container {
            display: flex;
            justify-content: center;
        }
        .button {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: orange;
            color: white;
            border: 1px solid #ffffff;
            padding: 20px 30px;
            margin: 15px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            width: 220px;
            height: 50px;
            line-height: 1.3;
            letter-spacing: 0.5px;
            transition: background 0.3s;
            flex-shrink: 0;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
        }
        .button:hover {
            background-color: darkorange;
        }

        .nav-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
        }

        .nav-buttons .button {
            padding: 0px;
            width: 180px;
            height: 50px;
            font-size: 16px;
        }

        .footer {
            /* position: fixed;
            bottom: 0; */
            width: 100%;
            color: white;
            text-align: center;
        }

        .credit {
            position: fixed;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 40px;
            width: 100%;
            font-size: 14px;
            background-color: #ff9900;
            color: white;
        }
    </style>
    </style>
</head>
<body>
    <div class="page-content"> 
        <h2>Selamat Datang, {{auth('warga')->user()->nama_lengkap}}</h2>
        <h3>Silahkan pilih surat yang ingin Anda ajukan.</h3>
        <!-- Tombol Pilihan Surat -->
        <div class="button-container">
            <a href='/surat-keterangan-domisili' class="button">Surat Keterangan Domisili</a>
            <a href='/surat-keterangan-pengantar' class="button">Surat Keterangan Pengantar</a>
            <a href='/surat-keterangan-ktp-dalam-proses' class="button">Surat Keterangan KTP Dalam Proses</a>
        </div>
        <div class="button-container">
            <a href='/surat-permohonan-kk' class="button">Surat Permohonan Kartu Keluarga</a>
            <a href='/surat-permohonan-perubahan-kk' class="button">Surat Permohonan Perubahan Kartu Keluarga</a>
            <!-- <a href='/surat-keterangan-domisili' class="button">Surat ke-x</a> -->
        </div>
        <div class="button-container">
            <a href='/surat-keterangan-catatan-kriminal' class="button">Surat Keterangan Catatan Kriminal</a>
            <a href='/surat-keterangan-wali-hakim' class="button">Surat Keterangan Wali Hakim</a>
            <!-- <a href='/surat-keterangan-domisili' class="button">Surat ke-x</a>
            <a href="#" class="button">Surat Permohonan Perubahan</a>
            <a href="#" class="button">Surat Keterangan Domisili Usaha</a>
            <a href="#" class="button">Surat Keterangan Usaha</a> -->
        </div>
        <!-- <div class="button-container">
            <a href='/surat-keterangan-domisili' class="button">Surat 10</a>
            <a href='/surat-keterangan-domisili' class="button">Surat 11</a>
            <a href="#" class="button">Surat Keterangan Wali Hakim</a>
        </div> -->
    </div> 
    <div class="footer">
        <!-- Tombol Navigasi -->
        <div class="nav-buttons"> 
            <a href='/warga' class="button">Halaman Utama</a> 
        </div> 
        <div class="credit">
            <p>&copy; Raihan Darmawan Pringgodigdo, Trisna Wahyu Mukti, Fakultas Ilmu Komputer<br>Universitas Pembangunan Nasional "Veteran" Jakarta</p>
        </div>
    </div>
</body>
</html>
