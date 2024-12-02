<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Domisili</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .kop-surat {
            text-align: center;
        }
        .kop-surat h1 {
            margin: 0;
        }
        .kop-surat p {
            margin: 0;
            font-size: 12px;
        }
        .content {
            margin-top: 20px;
        }
        .signature {
            margin-top: 40px;
            text-align: right;
        }
    </style>
</head>
<body>

    <div class="kop-surat">
        <h1>KOP SURAT PERUSAHAAN</h1>
        <p>Alamat Perusahaan</p>
        <p>Telepon: (021) 12345678</p>
        <p>Email: info@perusahaan.com</p>
    </div>

    <div class="content">
        <h2 style="text-align: center;">SURAT KETERANGAN</h2>
        <p>Yang bertanda tangan di bawah ini, kami dari perusahaan XYZ, menerangkan bahwa:</p>
        <p>Nama: {{ $name }}</p>
        <p>Jabatan: {{ $position }}</p>
        <p>Alamat: {{ $address }}</p>
        <p>Adalah karyawan kami yang bekerja sejak {{ $start_date }} sampai {{ $end_date }}.</p>
        <p>Demikian surat keterangan ini dibuat untuk digunakan sebagaimana mestinya.</p>
    </div>

    <div class="signature">
        <p>Jakarta, {{ $current_date }}</p>
        <p>Manajer HRD</p>
        <p>_____________________</p>
    </div>

</body>
</html>