<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beranda - Laman Admin Desa Rawapanjang</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                display: flex;
                background-color: #f4f4f4;
            }

            /* Sidebar Styles */
            .sidebar {
                width: 250px;
                background-color: #fff;
                height: 100vh;
                box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            }

            .sidebar-header {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                background: linear-gradient(to right, #FF8A00 50%, #F7E700);
                padding: 30px 20px 10px;
            }

            .sidebar-nav {
                padding: 10px;
            }

            .nav-link {
                display: block;
                color: #333;
                font-size: 14px;
                text-decoration: none;
                padding: 10px;
                border-radius: 5px;
                transition: 0.5s;
            }

            .nav-link:hover {
                border: 1px solid #FFA500; /* Mengatur border solid dengan warna oranye */
                background: white;
                color: #FFA500; /* Warna teks */    
            }

            .nav-link.active {
                background: linear-gradient(to right, #FF8A00 50%, #F7E700);
                color: white; /* Warna teks */
                font-weight: bold;
            }

            /* Main Content Styles */
            .main-content {
                flex-grow: 1;
            }

            .header {
                background-color: #FFA500;
                background: linear-gradient(to left, #FF8A00 50%, #F7E700);
                padding-left: 20px;
                display: flex;
                align-items: center;
            }

            .content {
                padding: 0px 30px 30px 30px;
            }

            button {
                border: none;
                padding: 5px 10px;
                border-radius: 5px;
                cursor: pointer;
                background-color: #FFA500;
                color: white;
            }

            button:hover {
                background-color: #e68a00;
            }
        </style>
    </head>
    <body>
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <img src="profile-photo.png" alt="Foto Akun" class="rounded-circle mb-2" width="100">
                <h4>Admin Desa</h4>
                <p>Desa Rawapanjang <br> Kabupaten Bogor</p>
            </div>
            <div class="sidebar-nav">
                <a href=/beranda class="nav-link active">Beranda</a>
                <a href=/info-desa class="nav-link">Informasi Desa</a>
                <a href=/data-warga class="nav-link">Data Warga</a>
                <a href=/statistik class="nav-link">Statistik Desa</a>
                <a href=/layanan-surat class="nav-link">Layanan Surat</a>
                <a href=/pengumuman class="nav-link">Pengumuman</a>
                <a href=/artikel-desa class="nav-link">Artikel Desa</a>
                <a href=/agenda class="nav-link">Agenda Desa</a>
                <a href=/pengaturan-akun class="nav-link">Pengaturan Akun</a>
                <a href=/admin class="nav-link">Logout</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h3>Desa Rawapanjang, Kabupaten Bogor</h3>
            </div>

            <div class="content">
                <h4>Beranda</h4>
                
            </div>
        </div>
    </body>
</html>