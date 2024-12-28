<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
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
            padding: 20px;
            height: 100vh;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .nav-link {
            display: block;
            color: #333;
            text-decoration: none;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .nav-link:hover {
            background-color: #eaeaea;
        }

        .nav-link.active {
            background-color: #FFA500;
            color: white;
        }

        /* Main Content Styles */
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        .header {
            background-color: #FFA500;
            color: white;
            margin: -20px -20px 0;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
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
        <div class="text-center mb-3">
            <img src="profile-photo.png" alt="Foto Akun" class="rounded-circle mb-2" width="100">
            <h4>Admin Desa</h4>
            <p>Desa Rawapanjang <br> Kabupaten Bogor</p>
        </div>
        <a href="/admin" class="nav-link active">Beranda</a>
        <a href="/pengumuman" class="nav-link">Pengumuman</a>
        <a href="/tentang-desa-rawapanjang" class="nav-link">Tentang Desa</a>
        <a href="/agenda-rawapanjang" class="nav-link">Agenda</a>
        <a href="/lapak-warga" class="nav-link">Lapak Warga</a>
        <a href="/artikel-terkini" class="nav-link">Artikel Terkini</a>
        <a href="/layanan_digital" class="nav-link">Layanan Digital</a>
        <a href="/profil_desa" class="nav-link">Profil Desa</a>
        <a href="/login" class="nav-link">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h2>Desa Rawapanjang, Kabupaten Bogor</h2>
            <button>Logout</button>
        </div>

        <div>
            <h4>Layanan Surat > Dalam Proses</h4>
            <div class="mt-4">
                <h5>Surat Sedang Diproses</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Aksi</th>
                            <th>No. Antrean</th>
                            <th>NIK</th>
                            <th>Nama Penduduk</th>
                            <th>No. HP Aktif</th>
                            <th>Jenis Surat</th>
                            <th>Tanggal Kirim</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><button>Menunggu Verifikasi Admin</button></td>
                            <td>12345</td>
                            <td>1234567890</td>
                            <td>Nama Warga</td>
                            <td>08123456789</td>
                            <td>Surat Keterangan</td>
                            <td>01-01-2024</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><button>Menunggu Tanda Tangan Kades</button></td>
                            <td>12346</td>
                            <td>1234567891</td>
                            <td>Nama Warga 2</td>
                            <td>08123456790</td>
                            <td>Surat Keterangan Nikah</td>
                            <td>02-01-2024</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>