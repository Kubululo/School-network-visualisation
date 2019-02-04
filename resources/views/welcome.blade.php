<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PCNetworkVisualisation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/Animate.css') }}">



        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 40vh;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #responsive{
                width: 100%;
                max-width: 900px;
                height: auto;}
            .disclaimer {
                text-transform: uppercase;
                font-size: 16px;
                color: #101010;
                font-weight: 600;
            }
        </style>
    </head>
    <body>
    <div class="flex-center fadeIn animated">
        <img id="responsive" src="{{url('icons/pc.png')}}" alt="pc"/>
    </div>
        <div class="flex-center position-ref full-height fadeIn  animated">
            <div class="content">
                <div class="title m-b-md bounce animated" data-wow-delay="1s">
                    PC NETWORK VISUALISATION
                </div>
                @if (Route::has('login'))
                    <div class="links">
                        @if (Auth::check())
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/register') }}">Register</a>
                        @endif
                    </div>
                @endif
                    <br>
                <div class="links fadeIn animated">
                    <a href="http://127.0.0.1:8000/documentation/">Documentation</a>
                    <a href="http://localhost/phpmyadmin/">PHPMyAdmin</a>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div class="content fadeIn animated">
            <div class="disclaimer">
            By Jakub Skurcak 2018 All Rights Reserved
                <br>
            </div>
        </div>
    </footer>
</html>
