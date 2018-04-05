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

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="mt-4">{{ $page->title }}</h2>

                {!! $page->text !!}
            </div>
        </div>
    </div>
@endsection
