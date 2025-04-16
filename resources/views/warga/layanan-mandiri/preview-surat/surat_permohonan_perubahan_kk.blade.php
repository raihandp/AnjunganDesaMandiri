@extends('layout.warga.preview_surat')

@section('title' , 'Surat Permohonan Perubahan Kartu Keluarga')
@section('content')
    <div>
        <p>Yang bertanda tangan di bawah ini Kepala Desa Rawapanjang, Kecamatan Bojonggede, Kabupaten Bogor, Provinsi Jawa Barat menerangkan dengan sebenarnya bahwa :</p>
        <table class="content">
            <tr>
                <td class="head-table">Nama Lengkap</td>
                <td class="titik-dua">: </td>
                <td>{{ $proses_surat['nama_lengkap'] }}</td>
            </tr>
            <tr>
                <td class="head-table">Tempat/Tanggal Lahir</td>
                <td class="titik-dua">: </td>
                <td>{{ $proses_surat['tempat_lahir'] }}, {{ $proses_surat['tanggal_lahir'] }}</td>
            </tr>
            <tr>
                <td class="head-table">Tempat Tinggal</td>
                <td class="titik-dua">: </td>
                <td>{{ $proses_surat['alamat'] }} RT {{ $proses_surat['rt'] }} RW {{ $proses_surat['rw'] }} Desa Rawapanjang, Kecamatan Bojonggede, Kabupaten Bogor</td>
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
                <td>{{ $proses_surat['nik'] }}</td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <td class="head-table">Keperluan</td>
                <td class="titik-dua">: </td>
                <td>{{ $proses_surat['keperluan'] }}</td>
            </tr>
            <tr>
                <td class="head-table">Keterangan Tambahan</td>
                <td class="titik-dua">: </td>
                <td>Orang tersebut di atas adalah benar-benar penduduk Desa Rawapanjang.</td>
            </tr>
        </table>
        <p>Demikian surat ini dibuat, untuk dipergunakan sebagaimana mestinya.</p>
    </div>
@endsection