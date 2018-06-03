<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="modal-header">
            <h2>Imagens</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @for($i=0; $i<count($images); $i++)
                        @php
                            $active = '';

                            if($i == 0)
                                $active = 'active';
                        @endphp
                        <li data-target="#carousel" data-slide-to="0" class="{{$active}}"></li>
                    @endfor
                </ol>
                <div class="carousel-inner">
                    @foreach ($images as $image)
                        @php
                            $active = '';

                            if($image == $images[0])
                                $active = 'active';
                        @endphp

                        <div class="carousel-item {{$active}}">
                            <img class="img-fluid" src="{{$image->image}}" alt="{{$image->title}}">
                        </div>
                    @endforeach
                </div>
              
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próxima</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
            </div>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script>

            $('.carousel').carousel({
              interval: 2000
            });
        </script>
    </body>
</html>