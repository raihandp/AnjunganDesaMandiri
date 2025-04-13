<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('assets/logo.png')}}" type="image/png">
    <style>
        body {
            background: #ffffff;
            font-family: 'Times New Roman';
        }

        h1 {
            font-size: 24px;
            font-weight: normal;
        }

        p {
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
            <h2>@yield('title')</h2>
            <p style="margin-top:-10px;">Nomor: [nomor_surat]</p>
            <br>
        </div>
        <div>
            @yield('content')
        </div>

        <div class="footer">
            <br><br>
            <p>Rawapanjang, {{$surat->updated_at ?? ""}}</p>
            <br><br><br>
            <p>____________________</p>
        </div>
    </div>
</body>

</html>