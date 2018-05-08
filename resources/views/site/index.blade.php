@extends('site.layout.layout')

@section('content')
    {{--Carousel--}}
    <div id="carousel" class="carousel slide" data-ride="carousel">
        {{--Indicator--}}
        <ol class="carousel-indicators">
            @php
                for($i=0; $i<count($banners); $i++) {
                    $active = '';
                    
                    if($i == 0)
                        $active = 'active';

                    echo "<li data-target='#carousel' data-slide-to='{$i}' class='{$active}'></li>";
                }   
            @endphp
        </ol>

        {{--Content--}}
        <div class="carousel-inner">
            @foreach ($banners as $banner)
                @php
                    $active = '';
                    
                    if($banner == $banners[0])
                        $active = 'active';
                @endphp

                <div class="carousel-item {{$active}}">
                    <img src="{{$banner->image}}" alt="{{$banner->description}}" title='{{$banner->title}}' class='img-fluid'>

                    {{--<div class="container">
                        <div class="carousel-caption">
                            <h1>{{$banner->title}}</h1>
                        </div>
                    </div>--}}
                </div>
            @endforeach
        </div>
        
        {{--Control--}}
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <h2 class="mt-4">{{$quemSomos->title}}</h2>
          
            {!! $quemSomos->text !!}

            {{--<p>
                <a class="btn btn-primary btn-lg" href="{{ route('catalogo') }}">Ver catálogo de produtos &raquo;</a>
            </p>--}}
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
                <a href="mailto:#">2000turismo@2000turismo.com.br</a>
                <br>

                {{--<strong>Midias Sociais:</strong>
                <a href="mailto:#">Facebook.com.br/</a>--}}
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

@section('scripts')
    <script>
        $('.carousel').carousel({
          interval: 5000
        });
    </script>
@endsection