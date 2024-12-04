<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anjungan Desa Mandiri</title>
    <link rel="icon" href="https://github.com/raihandp/AnjunganDesaMandiri/blob/master/Logo-Kab-Bogor.png" type="image/png">
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
        .container {
            max-width: 800px;
            width: 100%;
        }
        img {
            width: 120px;
            margin-top: 20px;
        }
        h1, h2 {
            margin: 0;
            padding: 5px 0;
            color: #fff;
        }
        .subtitle {
            margin-bottom: 20px;
            color: #fff;
        }
        .button-container {
            margin-top: 40px;
        }
        .button {
            background-color: orange;
            color: white;
            border: none;
            padding: 15px 30px;
            margin: 0 15px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
        }
        .button:hover {
            background-color: darkorange;
        }
    </style>
</head>
<body>

<div class="container">
    <img src="assets/Logo-Kab-Bogor.png" alt="Logo Desa" />
    <h1>Anjungan Desa Mandiri</h1>
    <h2>Desa Rawapanjang<br>Kabupaten Bogor</h2>

    <p class="subtitle">Selamat Datang. Silahkan pilih layanan yang Anda perlukan hari ini.</p>

    <!-- Tombol Layanan -->
    <div class="button-container">
        <button class="button" onclick="window.location.href='/layanan_digital';">Layanan Digital</button>
        <button class="button" onclick="window.location.href='/profil_desa';">Profil Desa</button>
    </div>
</div>

</body>
</html>
