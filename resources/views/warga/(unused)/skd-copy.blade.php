<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Domisili</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .form-container { max-width: 800px; margin: auto; }
        input[type="text"], input[type="date"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: orange;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover { background-color: darkorange; }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Surat Keterangan Domisili</h1>
        <form action="{{ url('/domisili/submit') }}" method="POST">
            <label>Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" required>

            <label>NIK / No. KTP:</label>
            <input type="text" name="nik" required>

            <label>Tempat Lahir:</label>
            <input type="text" name="tempat_lahir" required>

            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" required>

            <label>Kewarganegaraan:</label>
            <input type="text" name="kewarganegaraan" required>

            <label>Alamat / Tempat Tinggal:</label>
            <input type="text" name="alamat" required>

            <label>RT:</label>
            <input type="number" name="rt" required>

            <label>RW:</label>
            <input type="number" name="rw" required>

            <label>Desa:</label>
            <input type="text" name="desa" required>

            <label>Keperluan:</label>
            <input type="text" name="keperluan" required>

            <button type="submit">Lanjutkan</button>
        </form>
    </div>
</body>
</html>
