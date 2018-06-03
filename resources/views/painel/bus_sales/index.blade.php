@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Ônibus a venda</h1>
    </div>

    @can('create-bus_sales')
        <div class='col-md-12 text-center'>
            <a href='{{route('bus_sales.create')}}' alt='Cadastrar' title='Cadastrar' class='btn btn-default'>
                Cadastrar
            </a>
            <br/>
            <br/>
        </div>
    @endcan

    <table class="table table-responsive table-striped table-bordered table-hovered">
        <thead>
            <tr>
                <th width="100px">Ações</th>
                <th width="100px">ID</th>
                <th>Modelo</th>
                <th>Carroceria</th>
                <th>Ano</th>
                <th>Assentos</th>
                <th width="100px">Ativo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($busSales as $bus_sale)
            <tr>
                <td>
                    @can('delete-bus_sales')
                        {!! Form::open(['route' => ['bus_sales.destroy', $bus_sale->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                            {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan

                    @can('update-bus_sales')
                        <a href='bus_sales/{{$bus_sale->id}}/edit' class='btn btn-info'>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    @endcan
                </td>
                <td>{{$bus_sale->id}}</td>
                <td>{{$bus_sale->model}}</td>
                <td>{{$bus_sale->bodyModel}}</td>
                <td>{{$bus_sale->year}}</td>
                <td>{{$bus_sale->seatings}}</td>
                <td>
                    @php
                        $checked = '';

                        if($bus_sale->active == true)
                            $checked = 'checked';
                    @endphp

                    <input type="checkbox" {{$checked}} class='checkboxActive' data-model="BusSale" data-id="{{$bus_sale->id}}" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Ativo" data-off="Inativo" >
                </td>
            </tr>
            @empty
            <tr>
                <td colspan='7' class='text-center'>
                    Nenhum Ônibus cadastrado
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class='col-md-12 text-center'>
        {{$busSales->render()}}
    </div>
@endsection
