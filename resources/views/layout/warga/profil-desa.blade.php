<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('assets/logo.png')}}" type="image/png">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> -->
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            background-image: url('{{asset('assets/BackgroundMockupAnjungan.png') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; 
        }

        .container {
            width: 70%;
            padding: 80px;
            border-radius: 10px;
        }

        ul {
            line-height: 1.75;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 10px;
        }

        h3 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 18px;
            color: #555;
        }

        .header {
            position: fixed;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            /* height: 15%; */
            border-bottom: 2px solid #ffffff;
            padding: 15px;
        }

        .header h2 {
            /* box-shadow: 0 0 0 4px white; */
            font-family: Arial, Helvetica, sans-serif;
            text-shadow:
                1px 1px 0 white,
                -1px 1px 0 white,
                1px -1px 0 white,
                -1px -1px 0 white,
                2px 2px 0 white,
                -2px 2px 0 white,
                2px -2px 0 white,
                -2px -2px 0 white;
        }

        .page-content {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profil-desa-container {
            width: 70%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            margin-top: 10px;
            border: 3px solid #000000;
            border-radius: 60px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .button-container {
            display: flex;
            overflow-x: auto;
            justify-content: center;
            /* align-items: center; */
            padding: 20px;
            padding-top: 0px;
            gap: 20px;
            scrollbar-width: none;
        }

        .button {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ff9900;
            color: white;
            padding: 10px 30px;
            border: 1px solid #ffffff;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
            flex-shrink: 0;
            font-size: 16px;
            line-height: 1.3;
            letter-spacing: 0.5px;
            height: 50px;
            max-width: 120px;
        }

        .button:hover {
            background-color: #e68a00;
        }

        .footer-tentang-desa {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            height: 200px;
            color: white;
            text-align: center;
        }

        .footer-button {
            display: flex;
            opacity: 60%;
            justify-content: center;
            align-items: center;
            background-color: #ff9900;
            color: white;
            padding: 10px 30px;
            border: 1px solid #ffffff;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
            flex-shrink: 0;
            font-size: 16px;
            line-height: 1.3;
            letter-spacing: 0.5px;
            height: 50px;
            max-width: 120px;
        }

        .footer-button.active {
            opacity: 100%;
        }

        .button-container-tentang-desa {
            display: flex;
            overflow-x: auto;
            align-items: center;
            justify-content: flex-start;
            height: 100%;
            padding-top: 0px;
            gap: 20px;
            scrollbar-width: none;
            /* Sembunyikan scrollbar di Edge, Chrome */
        }

        .back-button {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ff9900;
            color: white;
            padding: 10px 30px;
            border: 1px solid #ffffff;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
            flex-shrink: 0;
            font-size: 16px;
            line-height: 1.3;
            letter-spacing: 0.5px;
            height: 120px;
            max-width: 180px;
            width: 100%;
        }

        .button-container-tentang-desa button:active {
            background-color: #e68a00;
        }

        .footer {
            /* position: fixed;
            bottom: 0; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            height: 150px;
            color: white;
            text-align: center;
            /* background-color: rgba(255, 153, 0, 0.5); */
            border: 2px solid rgba(0, 0, 0, 0.0);
            padding-bottom: 50px;
        }

        .footer h3 {
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 20px;
            text-shadow: 1px 1px 0 white,
                -1px 1px 0 white,
                1px -1px 0 white,
                -1px -1px 0 white,
                2px 2px 0 white,
                -2px 2px 0 white,
                2px -2px 0 white,
                -2px -2px 0 white;
        }

        .credit {
            position: fixed;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 40px;
            width: 100%;
            font-size: 14px;
            background-color: #ff9900;
            color: white;
        }
    </style>
</head>

<body>
    <div class="header">
        @yield('header')
    </div>
    <div class="page-content">
        @yield('content')
    </div>
    @yield('footer')
    <div class="credit">
        <p>&copy; Raihan Darmawan Pringgodigdo, Trisna Wahyu Mukti, Fakultas Ilmu Komputer<br>Universitas Pembangunan Nasional "Veteran" Jakarta</p>
    </div>
</body>

</html>