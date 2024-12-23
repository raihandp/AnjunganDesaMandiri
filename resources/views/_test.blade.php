<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Anjungan Desa Mandiri Desa Rawapanjang</title>
    <link rel="icon" href="https://rawapanjang-desa.id/desa/logo/1679693855_logo-pemkab-bogor.png" type="image/png">
    <style> 
        body { 
            margin: 0; 
            background: linear-gradient(to top, #ff9472, #f2709c);
            font-family: sans-serif; 
            overflow-x: hidden; 
            bottom: 0;
        }
        .header {
            color: white;
            text-align: center;
        }
        .video-container {
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #ffffff;
            color: white;
        }
        video {
            width: 100%;
        }
        .button-container {
            display: flex;
            overflow-x: auto;
            padding: 20px;
            padding-top: 0px;
            gap: 20px;
            scrollbar-width: none; /* Sembunyikan scrollbar di Firefox */
            -ms-overflow-style: none; /* Sembunyikan scrollbar di Internet Explorer 10+ */
        }
        .button {
            background-color: #ff9900;
            color: white;
            padding: 10px 20px;
            border: 2px solid #ffffff;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            flex-shrink: 0;
        }
        .button:hover {
            background-color: #e68a00;
        }
        .footer {
            /* position: fixed;
            bottom: 0; */
            /* height: 30vh; */
            width: 100%;
            color: white;
            text-align: center;
            /* padding-top: 10px; */
        }
        .credit {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30px;
            font-size: 12px;
            background-color: #ff9900;
            color: white;
        }
    </style>
</head> 
<body> 
    <div class="header"> 
        <h3>Selamat Datang di Anjungan Desa Mandiri</h3> 
        <h3>Desa Rawapanjang Kabupaten Bogor</h3> 
    </div> 
    <div class="video-container"> 
        <p>Video Profil Desa</p>
        <!-- <video controls> <source src="video-profil-desa.mp4" type="video/mp4"> Replace with your video source Your browser does not support the video tag. </video>  -->
    </div> 
    <div class="footer">
        <p>Silahkan pilih menu yang Anda perlukan hari ini.</p>
        <div class="button-container"> 
            <button class="button" onclick="window.location.href='/layanan_digital';">Layanan Digital</button>
            <a href="#" class="button">Pengumuman</a> 
            <a href="#" class="button">Tentang Desa Rawapanjang</a> 
            <a href="#" class="button">Agenda Rawapanjang</a> 
            <a href="#" class="button">Lapa</a> 
            <a href="#" class="button">Layanan Mandiri</a> 
            <a href="#" class="button">Pengumuman</a> 
            <a href="#" class="button">Tentang Desa Rawapanjang</a> 
            <a href="#" class="button">Agenda Rawapanjang</a> 
            <a href="#" class="button">Lapa</a> 
        </div> 
        <div class="credit">
            <p>&copy;</p>
        </div>
    </div>
    <script> // Optional: Add any additional JavaScript functionality here 
        document.querySelectorAll('.button').forEach(button => { 
            button.addEventListener('click', function() { 
                alert('Tombol ' + this.textContent + ' diklik!'); 
            }); 
        }); 
    </script> 
</body> 
</html> 