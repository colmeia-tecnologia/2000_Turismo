@extends('site.layout.layout')

@section('content')
  <div class="container">

    <div class="row">
      <div class="col-sm-12">
        <h2 class="mt-4">Catálogo de produtos</h2>

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por..." title="Digite um item para buscar">
        <div class="tableoverflow">
          <table id="myTable">
            <thead>
              <tr class="header">
                <th>Nome da peça</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Categoria</th>
                <th>Subcategoria</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
                <tr>
                  <td>{{$product->name}}</td>
                  <td>{{$product->quantity}}</td>
                  <td>R$ {{number_format($product->price, 2, ',', '.')}}</td>
                  <td>
                    @if(isset($product->category->title))
                      {{$product->category->title}}
                    @endif
                  </td>
                  <td>
                    @if(isset($product->subcategory->title))
                      {{$product->subcategory->title}}
                    @endif
                  </td>
                </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>

      </div>

    </div>


  </div>
@endsection

@section('scripts')
    {!! Html::script('/js/site/jsCatalog.min.js') !!}
@endsection