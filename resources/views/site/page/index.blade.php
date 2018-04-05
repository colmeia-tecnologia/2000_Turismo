@extends('site.layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="mt-4">{{ $page->title }}</h2>

                {!! $page->text !!}
            </div>
        </div>
    </div>
@endsection
