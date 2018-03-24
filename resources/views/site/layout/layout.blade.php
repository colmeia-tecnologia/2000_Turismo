<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('site.layout._meta')

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <!-- Bootstrap core CSS -->
        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="/css/site/business-frontpage.css" rel="stylesheet">
    </head>
    <body>
        @include('site.layout._menu')

        <!-- Page Content -->
        <div class="container">
            @yield('content')
        </div>

        @include('site.layout._footer')

        <!-- Bootstrap core JavaScript -->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        @yield('scripts')
    </body>
</html>