<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Digital - Anjungan Desa Mandiri</title>
    <link rel="icon" href="https://rawapanjang-bojonggede.desa.id/assets/files/data/website-desa-rawapanjang-3201132008/images/logo_pemkab_bogor.png" type="image/png">
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
            margin-bottom: 80px;
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
    <h1>Profil Desa</h1>

    <div class="button-container">
        <button class="button" onclick="window.location.href='/tentang_kami';">Tentang Kami</button>
        <button class="button" onclick="window.location.href='/visi_misi';">Visi & Misi</button>
        <button class="button" onclick="window.location.href='/sejarah_desa';">Sejarah Desa</button>
    </div>

    <!-- Tombol Navigasi -->
    <div class="nav-buttons">
        <button class="button" onclick="window.location.href='/';">Halaman Utama</button>
    </div>

</body>
</html>
