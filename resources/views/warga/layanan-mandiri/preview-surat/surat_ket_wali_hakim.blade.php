@extends('layout.warga.preview_surat')

@section('title' , 'Surat Keterangan Wali Hakim')
@section('content')
    <div>
        <p>Yang bertanda tangan di bawah ini Kepala Desa Rawapanjang, Kecamatan Bojonggede, Kabupaten Bogor, Provinsi Jawa Barat menerangkan dengan sebenarnya bahwa :</p>
        <table class="content">
            <tr>
                <td>1.</td>
                <td>NIK / No KTP</td>
                <td style="padding-left: 10px;">: </td>
                <td>{{ $proses_surat['nik']}}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Nama Lengkap</td>
                <td style="padding-left: 10px;">: </td>
                <td>{{ $proses_surat['nama_lengkap'] }}</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Tempat/Tanggal Lahir</td>
                <td style="padding-left: 10px;">: </td>
                <td>{{ $proses_surat['tempat_lahir'] }}, {{ $proses_surat['tanggal_lahir'] }}</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Tempat Tinggal</td>
                <td style="padding-left: 10px;">: </td>
                <td>{{ $proses_surat['alamat'] }} RT {{ $proses_surat['rt'] }} RW {{ $proses_surat['rw'] }} Desa Rawapanjang, Kecamatan Bojonggede, Kabupaten Bogor</td>
            </tr>
        </table>
        <p>Yang namanya tersebut di atas memang benar warga kami yang akan menikah di KUA Bojonggede Kabupaten Bogor. Berhubung orang tersebut tidak memiliki Wali Nasab, kami mohon dengan hormat Bapak Kepala KUA Bojonggede supaya berkenan menjadi Wali. </p>
        <p>Demikian surat keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya. </p>
    </div>
@endsection
