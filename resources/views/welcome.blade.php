<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
            .carousel-inner {
                width:640px;
                height:460px;
            }
            .carousel-item > img {
                height: 100%;
                
            }
        </style>
    </head>
    <body>
        {{-- BOOTSRTAP NAVBAR     --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                    <a href="{{ route('register') }}">Register</a>
                                @endauth
                            </div>
                        @endif
                </div>
              </nav>
              
              
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="container">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ URL::asset('assets/images/2018-cheersport2.jpg') }}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('assets/images/2018-coaches.JPG') }}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('assets/images/2018-uca.JPG') }}" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div>
                
                    <div class="title m-b-md">
                        J2 CREW   
                    </div>   
                    <div class="links">
                        <a href="https://photos.google.com/share/AF1QipOBwzpl49-KBMc-5M18Za95okbOdySKxKvMFBk-6ih8o9YqqotYyOW7WuTISlqJFA?key=NUlTT2lmcHVmRk9hd0lZUmdseWtLMEZpRGI2LXdn">Mint Banquet</a>
                        <a href="https://photos.google.com/share/AF1QipNcRkNS78cc9bQ83Dwp0eX1wE6IiaWGDAu4DLXqy5MAlsaKOT2g_tVro225PPW7Cw?key=R294dFFvbDRBSXdFaDNYcy1oOHl3MnE1ZzVjM1JR">UCS Internationals 2018</a>
                        <a href="https://photos.google.com/share/AF1QipNjTTvXp4dbYCY-IKCSsi1arhDwxkCvEHvhTkqtqdmRols6rDw0CpcjgqGZ9pz0Vg?key=RTRodjVDSkUzZ0haRWY5Wm1wNUdTYk0tQlI1TVlR">American Open</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
