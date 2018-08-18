<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistem Safety Induction</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #006400;
                /*#006400*/
                /*color: #636b6f;*/
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: bold;
                /*height: 100vh;*/
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a, ul, li{
                color: #fff;
                /*color: #636b6f;*/
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                list-style-type: none;
                margin: 0;
                
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="position-ref full-height top-left">
                <img src="img/logo2.png" width="250" height="100">
        </div>
        <div class="flex-center position-ref full-height container">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/fkp') }}">Formulir Kontrak Perusahaan</a>
                    @else
                        <a href="{{ route('login') }}" style="font-size: 14px">Login</a>
                         <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            

            <div class="content">
                <div class="title m-b-md">
                    Sistem Safety Induction
                </div>

                <!-- <div class="links">
                    <ul class="menu">
                        <a href="{{ url('/profil') }}"><li>Profil</li></a>
                    <li>Laporan
                        <ul class="subMenu">
                            <a href="http://www.petrokimia-gresik.com/Pupuk/Laporan-Tahunan-dan-Laporan-Keberlanjutan" style="text-decoration: none"><li>Laporan Tahunan</li></a>
                            <a href="#" style="text-decoration: none"><li>Grafik Tahunan</li></a>
                            <a href="#" style="text-decoration: none"><li>Informasi</li></a>
                        </ul>
                    </li>
                    <a href="https://laravel-news.com"><li>Berita</li></a>
                    <a href="{{ url('/produk') }}"><li>Produk</li></a> -->
                    <!-- <a href="{{ url('/produk') }}">Produk</a> -->
                   <!--  <a href="https://github.com/laravel/laravel"><li>FAQs</li></a>
                </ul>
                </div> -->
            </div>
        </div>
    </body>
</html>
