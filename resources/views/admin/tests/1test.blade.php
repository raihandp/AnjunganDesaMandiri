<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Container dengan Border Kanan dan Kiri</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            padding: 20px;
            background-color: white;
            border-left: 2px solid #ff9472; /* Border di sisi kiri */
            border-right: 2px solid #ff9472; /* Border di sisi kanan */
            margin-bottom: 20px; /* Jarak bawah untuk memisahkan dari elemen lain */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Judul Container</h2>
        <p>Ini adalah konten di dalam container. Border hanya akan muncul di sisi kiri dan kanan.</p>
    </div>
</body>
</html>