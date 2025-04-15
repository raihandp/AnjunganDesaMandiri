@extends('layout.warga.preview_surat')

@section('title' , 'Surat Keterangan Catatan Kriminal')
@section('content')
    <div>
        <p>Yang bertanda tangan di bawah ini Kepala Desa Rawapanjang, Kecamatan Bojonggede, Kabupaten Bogor, Provinsi Jawa Barat menerangkan dengan sebenarnya bahwa :</p>
        <table class="content">
            <tr>
                <td class="head-table">NIK / No KTP</td>
                <td class="titik-dua">: </td>
                <td>{{ $proses_surat['nik'] }}</td>
            </tr>
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
                <td class="head-table">Keperluan</td>
                <td class="titik-dua">: </td>
                <td>{{ $proses_surat['keperluan'] }}</td>
            </tr>
        </table>
        <p>Orang tersebut adalah benar-benar warga Desa Rawapanjang dan menurut data kami tidak pernah terlibat perkara Polisi dan beradat istiadat baik.</p>
        <p>Demikian surat keterangan ini dibuat dengan sesungguhnya untuk dipergunakan sebagaimana mestinya.</p>
    </div>
@endsection