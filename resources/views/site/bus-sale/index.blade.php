@extends('site.layout.layout')

@section('content')
    <div class="row">
      <div class="col-sm-12">
        <h2 class="mt-4">Ônibus a venda</h2>

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por..." title="Digite um item para buscar">
        <div class="tableoverflow">
          <table id="myTable">
            <thead>
              <tr class="header">
                <th>Fabricante</th>
                <th>Carroceria</th>
                <th>Ano</th>
                <th>Assentos</th>
                <th>Descrição</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($buses as $bus)
                <tr>
                  <td>{{$bus->manufacturer}}</td>
                  <td>{{$bus->bodyModel}}</td>
                  <td class='text-center'>{{$bus->year}}</td>
                  <td class='text-center'>{{$bus->seatings}}</td>
                  <td>{{$bus->description}}</td>
                </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>

      </div>

  </div>
@endsection

@section('scripts')
    {!! Html::script('/js/site/jsBusSales.min.js') !!}
@endsection