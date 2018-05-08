@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>
            Alterar Ônibus: {{$busSale->manufacturer}} {{$busSale->bodyModel}}  - ID: {{$busSale->id}}
        </h1>
    </div>

    <div class='col-md-12'>
        @include('painel.layout.errors')
    </div>

    {!! Form::model($busSale, ['route' => ['bus_sales.update', $busSale->id], 'method' => 'put']) !!}
        @include('painel.bus_sales._form')
    {!! Form::close() !!}
@endsection