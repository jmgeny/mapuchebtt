@extends('layouts')

@section('content')
 <section class="row">
    <section class="col-sm-8">
      <h2>Listado de producto</h2>  
      <div class="well">
        <a href="{{ route('product.create')}}" class="btn btn-primary">Ingresar Producto</a>
      </div>
      @include('products.fragment.info')
      <table class="table">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Short</th>
            <th colspan="3"></th>
           </tr>
        </thead>
        <tbody>
          @foreach($products as $prod)
              <tr>
                <td>{{$prod->name}}</td>
                <td>{{$prod->shrot}}</td>
                <td><a href="{{ route('product.show', $prod->id)}}"">Ver</a></td>
                <td><a href="{{ route('product.edit', $prod->id)}}"">Editar</a></td>
                <td><form action="{{ route('product.destroy', $prod->id)}}" method="POST">
                   {{ csrf_field() }}
                   <input type="hidden" name="_method" value="DELETE">
                   <button class="btn btn-link">Borrar</button>
                  
                </form></td>
              </tr>
          @endforeach
        </tbody>
      </table>
  {{ $products->links() }}
    </section>
    <aside class="col-sm-4">
      @include('products.fragment.aside');
    </aside>

</section>    

@endsection