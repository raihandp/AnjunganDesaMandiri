<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Digital - Anjungan Desa Mandiri Desa Rawapanjang</title>
    <link rel="icon" href="https://rawapanjang-desa.id/desa/logo/1679693855_logo-pemkab-bogor.png" type="image/png">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to top, #ff9472, #f2709c);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            color: #333;
        }

        h1 {
            font-size: 40px;
            margin-bottom: 20px;
            color: #fff;
        }

        p {
            font-size: 18px;
            margin-bottom: 50px;
            color: #fff;
        }

        .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .button {
            background-color: orange;
            color: white;
            border: none;
            padding: 20px 30px;
            margin: 10px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            width: 250px;
        }

        .button:hover {
            background-color: darkorange;
        }

        .nav-buttons {
            display: flex;
            margin-top: 30px;
        }

        .nav-buttons .button {
            padding: 10px 20px;
            width: 180px;
            height: 50px;
        }
    </style>
</head>
<body>
    <h1>Surat Digital</h1>
    <p>Silahkan pilih surat yang ingin Anda ajukan.</p>

    <!-- Tombol Pilihan Surat -->
    <div class="button-container">
        <button class="button" onclick="window.location.href='/surat_keterangan_domisili';">Surat Kuasa</button>
        <button class="button" onclick="window.location.href='/surat_keterangan_domisili';">Surat Keterangan Domisili</button>
        <button class="button" onclick="window.location.href='/surat_keterangan_domisili';">Surat Keterangan Pengantar</button>
    </div>
    <!-- <div class="button-container">
        <button class="button" onclick="window.location.href='/surat_keterangan_kematian';">Surat Keterangan Kematian</button>
        <button class="button" onclick="window.location.href='/surat_perubahan_kk';">Surat Permohonan Perubahan KK</button>
    </div> -->

    <!-- Tombol Navigasi -->
    <div class="nav-buttons">
        <button class="button" onclick="window.location.href='/';">Halaman Utama</button>
    </div>
</body>
</html>
