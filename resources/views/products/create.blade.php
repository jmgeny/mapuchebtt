@extends('layouts')

@section('content')
	
	<section class="row">
		<article class="col-sm-8">
			<h2>Crear Producto <a href="{{ route('product.index')}}" class="btn btn-primary pull-right">listar</a></h2>
				@include('products.fragment.error')
			{!! Form::open(['route' => 'product.store', 'files' => true]) !!}
			{{-- Variable,  Array con: ruta y ruta con valor, metodo put--}}
				@include('products.fragment.form')
			{!! Form::close() !!}				
		</article>
		<aside class="col-sm-4">
			@include('products.fragment.aside')
		</aside>
	</section>	
@endsection 