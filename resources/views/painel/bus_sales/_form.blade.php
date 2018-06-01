<div class='col-md-6'>
    <div class="input-group">
        <span class="input-group-addon" id="fabricante">Fabricante</span>
        {!! Form::input('text', 'manufacturer', null, ['class' => 'form-control', 'aria-describedby' => 'fabricante']) !!}
    </div>
</div>

<div class='col-md-6'>
    <div class="input-group">
        <span class="input-group-addon" id="carroceria">Carroceria</span>
        {!! Form::input('text', 'bodyModel', null, ['class' => 'form-control', 'aria-describedby' => 'carroceria']) !!}
    </div>
</div>

<div class='col-md-6 margin-top'>
    <div class="input-group">
        <span class="input-group-addon" id="ano">Ano</span>
        {!! Form::input('integer', 'year', null, ['class' => 'form-control', 'aria-describedby' => 'ano', 'min' => '1980']) !!}
    </div>
</div>

<div class='col-md-6 margin-top'>
    <div class="input-group">
        <span class="input-group-addon" id="assentos">Assentos</span>
        {!! Form::input('integer', 'seatings', null, ['class' => 'form-control', 'aria-describedby' => 'assentos', 'min' => '1']) !!}
    </div>
</div>

<div class='col-md-6'>
    <div class="input-group margin-top">
        <span class="input-group-addon" id="descricao">Descrição</span>
        {!! Form::input('text', 'description', null, ['class' => 'form-control', 'aria-describedby' => 'descricao']) !!}
    </div>
</div>

<div class='col-md-6 margin-top'>
    <div class="input-group">
        <span class="input-group-addon" id="active">Ativo</span>
        {!! Form::select('active', ['1' => 'Ativo', '0' => 'Inativo'], null, ['class' => 'form-control', 'aria-describedby' => 'active']) !!}
    </div>
</div>

<div class='col-md-12 text-center margin-top'>
    <a data-toggle="modal" href="/upload/many" data-target="#uploadModal" class='btn btn-default'>
        Imagens
    </a>

    @include('painel.upload.modal')
</div>

<div class='row' id='imagesList'>
</div>

<div class='col-md-12 text-center margin-top'>
    {!! Form::button('<i class="fa fa-check" aria-hidden="true"></i> Salvar&nbsp;', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
</div>

@section('scripts')
    {!! Html::script('/js/painel/upload.min.js') !!}
@endsection