@extends('site.layout.layout')

@section('content')
    <!-- Header with Background Image -->
    <header class="business-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="display-3 text-center text-white mt-4">{{ config('app.name', 'Laravel') }}</h1>
          </div>
        </div>
      </div>
    </header>


    <div class="row">
        <div class="col-sm-8">
            <h2 class="mt-4">{{$quemSomos->title}}</h2>
          
            {!! $quemSomos->text !!}

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
        @foreach ($pages as $page)
            <div class="col-sm-3 my-3">
                <div class="card">
                    <img class="card-img-top" src="{{ $page->image }}" alt="">
                    
                    <div class="card-body">
                        <h4 class="card-title">{{ $page->title }}</h4>
                        <p class="card-text">{{ $page->description }}</p>
                    </div>
                    
                    <div class="card-footer">
                        @php
                            $pageTitle = App\Http\Controllers\Util\UrlController::friendlyUrl($page->title);
                        @endphp
                        <a href="{{ route('pagina', ['title' => $pageTitle]) }}" class="btn btn-primary">
                            @if($page->title == 'Venda de Peças')
                                Confira o catálogo!
                            @else
                                Saiba Mais!
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- /.row -->
@endsection
