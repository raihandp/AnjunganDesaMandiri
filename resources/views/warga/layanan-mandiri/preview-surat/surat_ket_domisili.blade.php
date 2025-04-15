@extends('layout.warga.preview_surat')

@section('title' , 'Surat Keterangan Domisili')
@section('content')
    <div>
        <p>Yang bertanda tangan di bawah ini:</p>
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
        </table>
        <p>Orang tersebut di atas adalah benar-benar warga kami yang bertempat tinggal di {{
            $proses_surat['alamat'] }} RT {{ $proses_surat['rt'] }} RW {{ $proses_surat['rw'] }} Desa
            Rawapanjang, Kecamatan Bojonggede, Kabupaten Bogor.</p>
        <p>Surat Keterangan ini dibuat untuk keperluan: {{ $proses_surat['keperluan'] }}</p>
        <p>Demikian surat keterangan ini dibuat dengan sebenarnya.</p>
    </div>
@endsection