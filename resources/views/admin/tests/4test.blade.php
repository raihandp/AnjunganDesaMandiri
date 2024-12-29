<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Lightbox Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        .lightbox_container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        .lightbox_container.show {
            display: flex;
        }

        .lightbox_content {
            background: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .lightbox_content h2 {
            margin: 0 0 20px;
        }

        .lightbox_content button {
            margin: 5px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .lightbox_content .cancel {
            background-color: #f44336; /* Red */
            color: white;
        }

        .lightbox_content .confirm {
            background-color: #4CAF50; /* Green */
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Contoh Validasi Lightbox</h1>
    <button id="openLightbox">Lanjutkan</button>
</div>

<div class="lightbox_container" id="lightbox">
    <div class="lightbox_content">
        <h2>Apakah Anda yakin ingin melanjutkan?</h2>
        <button class="cancel" id="cancelButton">Kembali</button>
        <button class="confirm" id="confirmButton">Lanjutkan</button>
    </div>
</div>

<script>
    const lightbox = document.getElementById('lightbox');
    const openLightboxButton = document.getElementById('openLightbox');
    const cancelButton = document.getElementById('cancelButton');
    const confirmButton = document.getElementById('confirmButton');

    // Menampilkan lightbox saat tombol "Lanjutkan" diklik
    openLightboxButton.addEventListener('click', () => {
        lightbox.classList.add('show');
    });

    // Menutup lightbox saat tombol "Kembali" diklik
    cancelButton.addEventListener('click', () => {
        lightbox.classList.remove('show');
    });

    // Menangani aksi saat tombol "Lanjutkan" diklik
    confirmButton.addEventListener('click', () => {
        alert('Anda telah melanjutkan!');
        lightbox.classList.remove('show');
        // Tambahkan logika untuk melanjutkan ke langkah berikutnya di sini
    });
</script>

</body>
</html>