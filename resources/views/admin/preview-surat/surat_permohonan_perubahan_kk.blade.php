<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Permohonan Perubahan Kartu Keluarga</title>
    <style>
        body {
            background: #ffffff;
            font-family: 'Times New Roman';
        }

        h1 {
            font-size: 24px;
            font-weight: normal;
        }

        p, table {
            line-height: 1.5;
        }

        .header {
            text-align: center;
        }

        .content {
            margin-left: 50px;
            margin-right: 50px;
            text-align: justify;
        }

        .head-table {
            width: 150px;
        }

        .titik-dua {
            padding-left: 10px;
            padding-right: 5px;
        }

        .footer {
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="header">
        <table width="100%">
            <tr>
                <td width="25%">
                    <img src="{{asset('assets/logo.png')}}" alt="Logo Pemkab Bogor" width="100">
                </td>
                <td width="100%">
                    <h1>PEMERINTAH KABUPATEN BOGOR
                        <br>KECAMATAN BOJONGGEDE
                        <br>DESA RAWAPANJANG
                    </h1>
                    <p style="margin-top:-10px; margin-bottom:0px;">Jl. Talang Kp Kelapa RT.02 RW.15 No.02 Kode Pos
                        16920</p>
                </td>
            </tr>
            <tr>
                <td colspan='7'>
                    <hr style="border: 2px solid black;">
                </td>
            </tr>
        </table>
    </div>

    <div class="content">
        <div class="header">
            <h2>Surat Permohonan Perubahan Kartu Keluarga</h2>
            <p style="margin-top:-10px;">Nomor: {{$surat->no_surat}}</p>
            <br>
        </div>
        <div>
        <p>Yang bertanda tangan di bawah ini Kepala Desa Rawapanjang, Kecamatan Bojonggede, Kabupaten Bogor, Provinsi Jawa Barat menerangkan dengan sebenarnya bahwa :</p>
            <table class="content">
                <tr>
                    <td class="head-table">Nama Lengkap</td>
                    <td class="titik-dua">: </td>
                    <td>{{ $surat->isi_surat['nama_lengkap'] }}</td>
                </tr>
                <tr>
                    <td class="head-table">Tempat/Tanggal Lahir</td>
                    <td class="titik-dua">: </td>
                    <td>{{ $surat->isi_surat['tempat_lahir'] }}, {{ $surat->isi_surat['tanggal_lahir'] }}</td>
                </tr>
                <tr>
                    <td class="head-table">Tempat Tinggal</td>
                    <td class="titik-dua">: </td>
                    <td>{{ $surat->isi_surat['alamat'] }} RT {{ $surat->isi_surat['rt'] }} RW {{ $surat->isi_surat['rw'] }} Desa Rawapanjang, Kecamatan Bojonggede, Kabupaten Bogor</td>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
                <tr>
                    <td>Surat Bukti Diri</td>
                </tr>
                <tr>
                    <td class="head-table">KTP</td>
                    <td class="titik-dua">: </td>
                    <td>{{ $surat->isi_surat['nik'] }}</td>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
                <tr>
                    <td class="head-table">Keperluan</td>
                    <td class="titik-dua">: </td>
                    <td>{{ $surat->isi_surat['keperluan'] }}</td>
                </tr>
                <tr>
                    <td class="head-table">Keterangan Tambahan</td>
                    <td class="titik-dua">: </td>
                    <td>Orang tersebut di atas adalah benar-benar penduduk Desa Rawapanjang.</td>
                </tr>
            </table>
            <p>Demikian surat keterangan ini dibuat, untuk dipergunakan sebagaimana mestinya.</p>
            </div>

        <div class="footer">
            <br><br>
            <p>Rawapanjang, {{$surat->updated_at->translatedFormat('d F Y') ?? ""}}</p>
            <img src="{{asset('assets/ttd_kades.png')}}" height="116px" width="116px" alt="ttd_desa" />
            <br>
            <!-- <p style="align-items: flex-start">Pejabat Desa</p> -->
            <br><br>
            <br><br>
            <br><br>
        </div>
    </div>
</body>

</html>