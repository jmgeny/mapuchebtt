<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Productos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
	
</head>
<body>

	<section class="container">
		<section class="row">
			<header class="col-xs-12">
				<a href="{{ url('/') }}"><h1 class="page-header text-center" >MacheBTT</h1></a>
				
			</header>
			
		</section>
		@yield('content');
	</section>
	
	{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
	{{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>