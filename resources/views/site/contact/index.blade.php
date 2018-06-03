@extends('site.layout.layout')

@section('content')
    <!-- Page Content -->
    <div class="row">
        <div class="col-sm-12">
          <h2 class="mt-4">Fale Conosco</h2>

          @include('site.layout._errors')

          {!! Form::open(['route' => 'contato.send', 'id' => 'contact-form', 'role' => 'form']) !!}
            <div class="messages"></div>

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Nome *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Insira seu nome completo *" required="required" data-error="campo obrigatório.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_subject">Assunto *</label>
                            <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Insira o assunto da mensagem *" required="required" data-error="campo obrigatório.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="insira seu email *" required="required" data-error="campo obrigatório.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_phone">Telefone</label>
                            <input id="form_phone" type="text" name="phone" class="form-control telefone" placeholder="Insira um número de telefone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Mensagem *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Insira sua mensagem aqui*" rows="4" required="required" data-error="Deixe sua mensagem."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary btn-send" value="Enviar mensagem">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-muted"><strong>*</strong> Campos obrigatórios.</p>
                    </div>
                </div>
            </div>

        {!! Form::close() !!}

    </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('/js/common/maskedinput.min.js') !!}
    {!! Html::script('/js/common/mascaras.min.js') !!}
@endsection