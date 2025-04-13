@extends('layout.warga.preview_surat')

@section('title' , 'Surat Keterangan KTP dalam Proses')
@section('content')
            <div>
                <p>Yang bertanda tangan di bawah ini Kepala Desa Rawapanjang, Kecamatan Bojonggede, Kabupaten Bogor, Provinsi Jawa Barat menerangkan dengan sebenarnya bahwa :</p>
                <table class="content">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td style="padding-left: 10px;">: </td>
                        <td>{{ $proses_surat[0]->nama_lengkap }}</td>
                    </tr>
                    <tr>
                        <td>Tempat/Tanggal Lahir</td>
                        <td style="padding-left: 10px;">: </td>
                        <td>{{ $proses_surat[0]->tempat_lahir }}, {{ $proses_surat[0]->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Tempat Tinggal</td>
                        <td style="padding-left: 10px;">: </td>
                        <td>{{ $proses_surat[0]->alamat }} RT {{ $proses_surat[0]->rt }} RW {{ $proses_surat[0]->rw }} Desa Rawapanjang, Kecamatan Bojonggede, Kabupaten Bogor</td>
                    </tr>
                </table>
                <p>Orang tersebut adalah benar-benar warga Desa Rawapanjang yang saat ini Kartu Tanda Penduduk sedang dalam proses. </p>
                <p>Demikian surat keterangan ini dibuat dengan sesungguhnya untuk dipergunakan sebagaimana mestinya.</p>
            </div>
            @endsection