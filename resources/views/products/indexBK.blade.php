@extends('layouts')

@section('content')
 <section class="row">
    <section class="col-sm-8">
      <div class="well">
        <a href="{{ route('product.create')}}" class="btn btn-primary">Ingresar Producto</a>
      </div>  
      @include('products.fragment.info')
    <section class="row text-center">
       @foreach($products as $prod)
         <article class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">{{$prod->name}}</h4>
              <p class="card-text">{{$prod->short}}</p>
            </div>
            <div class="card-footer">
              <a href="{{ route('product.show', $prod->id)}}" class="btn btn-primary">Ver mas</a>
              <a href="{{ route('product.edit', $prod->id)}}" class="btn btn-primary">Editar</a>
              <div>
                <form action="{{ route('product.destroy', $prod->id)}}" method="POST">
                   {{ csrf_field() }}
                   <input type="hidden" name="_method" value="DELETE">
                   <button class="btn btn-link">Borrar</button>
                  
                </form>
              </div>
            </div>
          </div>
        </article>
                     
        @endforeach
    </section>
    {{ $products->links() }}
    </section>
    <aside class="col-sm-4">
      @include('products.fragment.aside');
    </aside>

</section>    

@endsection