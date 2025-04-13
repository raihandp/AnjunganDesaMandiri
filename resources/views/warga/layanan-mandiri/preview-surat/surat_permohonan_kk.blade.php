@extends('layout.warga.preview_surat')

@section('title' , 'Surat Permohonan Kartu Keluarga')
@section('content')
    <div>
        <p>Yang bertanda tangan di bawah ini Kepala Desa Rawapanjang, Kecamatan Bojonggede, Kabupaten Bogor, Provinsi Jawa Barat menerangkan dengan sebenarnya bahwa :</p>
        <table class="content">
            <tr>
                <td>Nama Lengkap</td>
                <td style="padding-left: 10px;">: </td>
                <td>{{ $proses_surat['nama_lengkap'] }}</td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td style="padding-left: 10px;">: </td>
                <td>{{ $proses_surat['tempat_lahir'] }}, {{ $proses_surat['tanggal_lahir'] }}</td>
            </tr>
            <tr>
                <td>Tempat Tinggal</td>
                <td style="padding-left: 10px;">: </td>
                <td>{{ $proses_surat['alamat'] }} RT {{ $proses_surat['rt'] }} RW {{ $proses_surat['rw'] }} Desa Rawapanjang, Kecamatan Bojonggede, Kabupaten Bogor</td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td>Surat Bukti Diri</td>
            </tr>
            <tr>
                <td>KTP</td>
                <td style="padding-left: 10px;">: </td>
                <td>{{ $proses_surat['nik'] }}</td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td>Keperluan</td>
                <td style="padding-left: 10px;">: </td>
                <td>{{ $proses_surat['keperluan'] }}</td>
            </tr>
            <tr>
                <td>Keterangan Tambahan</td>
                <td style="padding-left: 10px;">: </td>
                <td>Orang tersebut di atas adalah benar-benar penduduk Desa Rawapanjang.</td>
            </tr>
        </table>
        <p>Demikian surat ini dibuat, untuk dipergunakan sebagaimana mestinya.</p>
    </div>
@endsection