<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* Tambahkan CSS kustom di sini */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .nav-link.active {
            background-color: #FFA500;
            border-radius: 5px;
        }

        .bg-orange {
            background-color: #FFA500 !important;
        }

        .table-warning {
            background-color: #FFF5CC;
        }

        button {
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ddd;
        }

    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-warning text-white p-3 vh-100" style="width: 250px;">
            <div class="text-center mb-3">
                <img src="profile-photo.png" alt="Foto Akun" class="rounded-circle mb-2" width="100">
                <h4>Admin Desa</h4>
                <p>Desa Rawapanjang <br> Kabupaten Bogor</p>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link text-white">Beranda</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link text-white">Informasi Desa</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link text-white">Data Warga</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link text-white">Statistik Desa</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link text-white active bg-orange">Layanan Surat</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link text-white">Pengumuman</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link text-white">Artikel Desa</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link text-white">Agenda Desa</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link text-white">Pengaturan Akun</a></li>
            </ul>
        </nav>

        <!-- Konten Utama -->
        <div class="flex-grow-1 p-4">
            <!-- Header -->
            <div class="bg-warning text-dark p-3 rounded mb-4 d-flex justify-content-between">
                <h2 class="m-0">Desa Rawapanjang, Kabupaten Bogor</h2>
                <button class="btn btn-dark">Logout</button>
            </div>

            <!-- Konten -->
            <div>
                <h4>Layanan Surat > Dalam Proses</h4>
                <div class="mt-4">
                    <h5>Surat Sedang Diproses</h5>
                    <table class="table table-bordered">
                        <thead class="table-warning">
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
                                <td><button class="btn btn-light">Menunggu Verifikasi Admin</button></td>
                                <td>12345</td>
                                <td>1234567890</td>
                                <td>Nama Warga</td>
                                <td>08123456789</td>
                                <td>Surat Keterangan</td>
                                <td>01-01-2024</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><button class="btn btn-light">Menunggu Tanda Tangan Kades</button></td>
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
    </div>
</body>
</html>
