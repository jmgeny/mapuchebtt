<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        /*#cd0c1d rojo*/
            html, body {
                background-color: #fff;
                color: #000000;
                /*font-family: 'Raleway', sans-serif;*/
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .fa {
                color: blue;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <section class="flex-center position-ref full-height">
{{--             @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Inicio</a>
                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endauth
                </div>
            @endif --}}  
            <section class="content">
                <article class="title">
                    <a href="https://www.mapuchebtt.com" target="new">
                        <img src="img/mapuchebtt.jpg" alt="">
                    </a>

                </article>

                <h3><a href="https://goo.gl/maps/xzF4e3CW32z" target="new">Saavedra 135 | Quilmes | Buenos Aires</a> | Tel: (54) 11 4253-8679 | W: 11 4415-6427</h3>
            
                <article class="links">
                    <a href="https://www.facebook.com/Mapuchebtt.Quilmes" target="new"><i class="fa fa-facebook" style="font-size:24px"></i></a>
                    <a href="https://www.instagram.com/mapuchebtt/" target="new"><i class="fa fa-instagram" style="font-size:24px"></i></a>
                    <a href="mailto:info@mapuchebtt.com" target="new"><i class="fa fa-mail-forward" style="font-size:24px"></i></a>
                </article>

                <article>
                    <button class="btn btn-default">
                        <a href="{{ route('product.index')}}">Listado</a>    
                    </button>
                </article>
            </section>
        </section>
    </body>
</html>
