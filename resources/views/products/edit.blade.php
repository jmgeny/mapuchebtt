@extends('layouts')

@section('content')
	
	<section class="row">
		<article class="col-sm-8 text-center">
			<h2>Editar Producto <a href="{{ route('product.index')}}" class="btn btn-primary pull-right">listar</a></h2>
				@include('products.fragment.error')
			{!! Form::model($product, ['route' => ['product.update', $product->id], 'method' => 'PUT']) !!}
			{{-- Variable,  Array con: ruta y ruta con valor, metodo put--}}
				@include('products.fragment.form')
			{!! Form::close() !!}

		</article>
		<aside class="col-sm-4 text-center">
			@include('products.fragment.aside')
		</aside>
	</section>	
@endsection