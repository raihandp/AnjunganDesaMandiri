@extends('layout.warga.preview_surat')

@section('title' , 'Surat Keterangan Domisili')
@section('content')
        <div>
            <p>Yang bertanda tangan di bawah ini:</p>
            <table class="content">
                <tr>
                    <td>NIK / No KTP</td>
                    <td style="padding-left: 10px;">: </td>
                    <td>{{ $proses_surat['nik'] }}</td>
                </tr>
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
            </table>
            <p>Orang tersebut di atas adalah benar-benar warga kami yang bertempat tinggal di {{
                $proses_surat['alamat'] }} RT {{ $proses_surat['rt'] }} RW {{ $proses_surat['rw'] }} Desa
                Rawapanjang, Kecamatan Bojonggede, Kabupaten Bogor.</p>
            <p>Surat Keterangan ini dibuat untuk keperluan: {{ $proses_surat['keperluan'] }}</p>
            <p>Demikian surat keterangan ini dibuat dengan sebenarnya.</p>
        </div>
@endsection