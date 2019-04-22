<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	{{-- <title>MapucheBTT</title> --}}
    <title>@yield('titulo')</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Tienda de Bicicletas, Componentes y Logística">
    <meta name="author" content="Juan Manuel Geny">	

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/mapuchebtt.css') }}" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="img/mapucheBTT_icono.ico">            
</head>
<body id="page-top">
        {{-- <div class="container"> --}}
            @include('navbar')
            @yield('content')
        {{-- </div> --}}

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- Contact Form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('js/contact_me.js') }}"></script>
    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/freelancer.min.js') }}"></script>	
</body>
</html>