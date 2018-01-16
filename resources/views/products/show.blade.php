@extends('layouts')

@section('content')
	
	<section class="row">
		<article class="col-sm-8 text-center">
			<img src="http://via.placeholder.com/500x200" class="img-rounded" alt="Cinque Terre">
			<h2>{{ $product->name }}</h2>
			<p>{{ $product->shot}}</p>
			{{!! $product->body !!}}
			<div>
				<a href="{{ route('product.edit', $product->id)}}" class="btn btn-primary pull-left">Editar</a>
				<a href="{{ route('product.index')}}" class="btn btn-primary pull-right">listar</a>
			</div>			
		</article>
		<aside class="col-sm-4 text-center">
			@include('products.fragment.aside');
		</aside>
	</section>	
@endsection