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
              <tr>
                <td>Roda</td>
                <td>3</td>
                <td>R$ 75,00</td>
                <td>Cat. Roda</td>
                <td>Sub.Cat. Pirelli</td>
              </tr>
              <tr>
                <td>Freio</td>
                <td>3</td>
                <td>R$ 75,00</td>
                <td>Cat. Roda</td>
                <td>Sub.Cat. Pirelli</td>
              </tr>
              <tr>
                <td>Motor</td>
                <td>3</td>
                <td>R$ 75,00</td>
                <td>Cat. Roda</td>
                <td>Sub.Cat. Pirelli</td>
              </tr>
              <tr>
                <td>Espelhos</td>
                <td>3</td>
                <td>R$ 75,00</td>
                <td>Cat. Roda</td>
                <td>Sub.Cat. Pirelli</td>
              </tr>
              <tr>
                <td>Embreagem</td>
                <td>3</td>
                <td>R$ 75,00</td>
                <td>Cat. Roda</td>
                <td>Sub.Cat. Pirelli</td>
              </tr>
              <tr>
                <td>Outro equipamento</td>
                <td>3</td>
                <td>R$ 75,00</td>
                <td>Cat. Roda</td>
                <td>Sub.Cat. Pirelli</td>
              </tr>
              <tr>
                <td>Bancos</td>
                <td>3</td>
                <td>R$ 75,00</td>
                <td>Cat. Roda</td>
                <td>Sub.Cat. Pirelli</td>
              </tr>
              <tr>
                <td>Câmbio</td>
                <td>3</td>
                <td>R$ 75,00</td>
                <td>Cat. Roda</td>
                <td>Sub.Cat. Pirelli</td>
              </tr>
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