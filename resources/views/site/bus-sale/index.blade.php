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
                <th>Modelo</th>
                <th>Carroceria</th>
                <th>Ano</th>
                <th>Assentos</th>
                <th>Descrição</th>
                <th>Ver imagens</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($buses as $bus)
                <tr>
                  <td>{{$bus->model}}</td>
                  <td>{{$bus->bodyModel}}</td>
                  <td class='text-center'>{{$bus->year}}</td>
                  <td class='text-center'>{{$bus->seatings}}</td>
                  <td>{{$bus->description}}</td>
                  <td class='text-center'>
                    <a href='#' class='linkModal' data-toggle="modal" data-target="#modal" data-remote='true' data-url='{{env('APP_URL')}}/venda-onibus/{{$bus->id}}/imagens' >
                      <i class="fas fa-images fa-2x"></i>
                    </a>
                  </td>
                </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>

        {{--Modal--}}
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="Imagens" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <iframe width="100%" height="450" frameborder="0" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>

      </div>

  </div>
@endsection

@section('scripts')
    {!! Html::script('/js/site/jsBusSales.min.js') !!}
    <script>
      $('.linkModal').click(function () {
        var src = $(this).attr("data-url");
        $('#myModal').modal('show');
        $('#myModal iframe').attr('src', src);
      });

      $('#myModal button').click(function () {
        $('#myModal iframe').removeAttr('src');
      });
    </script>
@endsection