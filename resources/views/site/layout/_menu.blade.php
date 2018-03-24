<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">Millenium Diesel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina', ['title' => 'empresa']) }}">A Empresa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('catalogo') }}">Catálogo de Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contato') }}">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

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