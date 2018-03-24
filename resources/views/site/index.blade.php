@extends('site.layout.layout')

@section('content')
    <div class="row">
        <div class="col-sm-8">
          <h2 class="mt-4">Quem somos nós</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="{{ route('catalogo') }}">Ver catálogo de produtos &raquo;</a>
          </p>
        </div>
        <div class="col-sm-4">
          <h2 class="mt-4">Fale conosco</h2>
          <address>
            <strong></strong>
            <br>Avenida Presidente Wenceslau Braz, 4640
            <br>Estância Poços de Caldas - Poços de Caldas - MG
            <br>
          </address>
          <address>
            <strong>Telefones:</strong>
            (35) 3722-2505<br>
            Tel: (35) 3722-2521<br>
            Tel: (35) 3713-5923
            <br>
              <strong>E-mail:</strong>
            <a href="mailto:#">email@milleniumdiesel.com</a>
            <br>
              <strong>Midias Sociais:</strong>
            <a href="mailto:#">Facebook.com.br/</a>
          </address>
        </div>
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="/img/img2.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Venda de Peças</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
            </div>
            <div class="card-footer">
              <a href="{{ route('catalogo') }}" class="btn btn-primary">Confira o catálogo!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="/img/img1.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Transporte</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
            </div>
            <div class="card-footer">
              <a href="{{ route('pagina', ['title' => 'transporte']) }}" class="btn btn-primary">Saiba mais!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="/img/img3.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Reforma de ônibus</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="{{ route('pagina', ['title' => 'reforma']) }}" class="btn btn-primary">Saiba mais!</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->
@endsection
