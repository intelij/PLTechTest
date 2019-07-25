<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    PayLink TechTest
                </div>

                <div class="links">
                    <a href="{{ route('fibonacci') }}">Fibonacci Sequence</a>
                    <a href="https://dbdiagram.io/d/5d39edc3ced98361d6dd02ed">Social Network</a>
                    <a href="{{ route('magic') }}">Magic Getter Setter</a>
                    <a href="{{ route('fizzbuzz') }}">Fizz Buzz</a>
                    <a href="https://bitbucket.org/intelij/">My BitBucket Bucket Repo</a>
                    <a href="https://github.com/intelij">My GitHub Repo</a>
                </div>

                <iframe width="760" height="515" src='https://dbdiagram.io/embed/5d39edc3ced98361d6dd02ed' style="border: none; margin-top: 40px;"> </iframe>

            </div>

        </div>
    </body>
</html>
