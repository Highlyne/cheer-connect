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
            .carousel-inner > .carousel-item > img {
                width:640px;
                height:460px;
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
                                <img class="d-block w-100" src="https://lh3.googleusercontent.com/1LrywmgC3hHLAnQsfBj_ret5RO-P_rU2WZMLAhJCVc11f4kA3EFlJdwkAaEYZDFPIxvV1heIOMjZzECqYcUNW61n7rEHQ2pU46hUypzA86OMu0MBIY_UPnHqVzLwviURdMfeIlSDnPUyFxR6csKZS8CDOk6w6ymU6oNSbI7W9KE8TCc6qYu2k_n2_UGlOuK3GD4PfjtlSZNDcSTFbCyltDP0enVxinCbOo5-zJEVsIe1sDVIak07mzaH37FUFwtHAyxOXJYg30fbeICzG_A6CsRysGszBAHpw961IhjFW0cB0mtaK1emlFu9QXn0xkxkbM_IUeXCQ9K2i1Jwrb8KDpxaa515tkWGza6JughDITmWmgKxwqyBde2xxmod5ixwuGasfP1tpFVlPZsNwERPGaERE0Y_pNJ0TIs8qwp4xtc6jxXVjoA47IenX4EWaVdEHcMFMyObrNYB9kdTDjKPMzSobcP5Szq0ufm4Mp_gbv4I2CSOesHI29Mn4qyRnz7_uqTVY7gffc9mq4eN9wncgxCfu0rwVvoAzIFgIUiRY56tCsUUDdOL5CmUaqYEl3tZ5DhbS_87y47gNlVHK_BKqPFI9xsBfrkR6yrLIi3JXnsJKF9KDHDwbF7kMwIiA9Jtbord2iD5TTCBZ98AiZNHLy7H5-2bRPGdtbAVYhJdz_5llYhQ3DqmDaVV=w960-h720-no" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="https://lh3.googleusercontent.com/aJcRCIxunFyByRq3nJgpY6a5F-41xcCfjPrZyMxBxioBTZppngNK3ilimltubKedqIz3wEd9UoPZnbaXg-Ca8-XI0pTVRInkUwEtZU0hr3IiUUFFc8Q4vf8Fzl7Bo0fKvXEB3dspwBG8XvwcLj-FEyfC0v_339JY2w-FMixR6uH3bnwnTLuRaldVsAf3aclbxrzsm0WCjgB57XXejjVm9Eq2hTfSTiiRxphtZ4HtQxw7UJTnnJ1CyXDxYaKdM1fpgiBkCQmMPeGEPuwZPMCyBrm0pAbE-Xf4QHounaRFXUWbsL2lygAicsgMUoIFIIhecqS2-nbzGzV_MhnSdJPYgR_zSAkd0DohxeB4qPDRNlz4bSwme-E6kwQnBcZ5waxtYQf8sXS7C1QMUup5mWUGInZOcw0ViavpnJuuTJ8cMbcYnfkpeopc9XSbRNDG0rLLaqcL8jX_q-GV51JslBhu7NtYS7chcN0sjNLTTBYwjhB0gcIaL68fVvLixA6yR200dInBVOQYOR0gNomk-ZSCr1aLyx1-VMDcrir_hhlEAWluMiBfkpTECdWBq_NMLy8KvBiuvmfKGMkxMHvH1n9id9gvrSR7qrdPyVf5GNRE1YzFOP-KMJHiqbKAG1nymszbfLaOOCSK29Hv25gKrN_ep94-a9FySP1PSLLqgoR6e59JWA_fDHYEJKiK=w1206-h1606-no" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="https://lh3.googleusercontent.com/xsG_IM84dPQ5BJ5k_WQseADJdgfaAoGEkmC00LzGc-OmqlEziI8MBFfA75IaXPuHwbkmoFXJ-1A00ChGT4sMcPSPvSUrVilOrLLaiu4U5RIIKqxQtVTVzBOqfKIk7tfEl0WLfGCvz2m2Vz7KkP22z5wrhTfJPBat35Rvs3acFv-nIUTieA51tmlSsvqRBVgZIvC1K_TBteNUtnIkntZiGlusPWFdCGLsCGQOt7HCArO8zujscIOBXeq-99Y1vYZ_UoBUmQNBaqrk_rrgwdBDVYgaNeGmKrCNjOthAqRo8mk1_-AxSFpTeYfHWKQqqIciEGdqEOMdP2QSciYTiNtfhxfV68JR9ouDTYAH9fEBCTXGQGzIDqpd-bIKvgNTZ5NYReddA6dkC9a8gZu5l48MAePqbIt6Pw9pf1HNRXC2yMegJe9-N7eu-LBwmRr9jI6GUd6f6x6hoy_Zd8cDL-HZrR1l7bkS_dvNBByiEAt8IXyl-6OBa05oM33sq86n7GmcvMPvd9rQiL3LUYn5cEakDj3Gpt59Ms1jm7Uhpq3EiNGgB1Yc7ka3Dp5CM3_J4NPdeof0d7T6QKILjMGkU9XWfz86S742YxzKu8Am_2BnPd2NOGp7Rnh-AB97gJK0C5VPVc7sGrYjs50Gr8qlVyhYqj2Zqat7S03vxw3gDujjdAzPSIfJ_9Qfx6shAA=w1440-h1080-no" alt="Third slide">
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
