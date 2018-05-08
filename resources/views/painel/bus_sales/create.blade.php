@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Novo Ônibus</h1>
    </div>

    @include('painel.layout.errors')

    {!! Form::open(['route' => 'bus_sales.store']) !!}
        @include('painel.bus_sales._form')
    {!! Form::close() !!}
@endsection
