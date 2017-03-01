<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo') }}</title>
    <meta name="description" content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" value="summary">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ isset($seo['url']) ? $seo['url'] : config('app.url') }}" />
    <meta property="og:image" content="{{ isset($seo['imagem']) ? $seo['imagem'] : config('seo.imagem') }}" />
    <meta property="og:description" content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}" />


    
    <!-- Styles -->
    <!-- <link href="/css/app.css" rel="stylesheet"> -->

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles MATERIALIZE-->
    <link href="{{asset('lib/materialize/dist/css/materialize.css')}}" rel="stylesheet">

      <link href="{{asset('css/style.css')}}" rel="stylesheet">



    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

    <div id="app">

      <header>

        @include('layouts._site._nav')

      </header>




    </div>

<main>

  @if(Session::has('mensagem'))

  <div class="container">
    <div class="row">

      <div class="card {{ Session::get('mensagem')['class'] }}">
        <div align="center" class="card-content">
          {{ Session::get('mensagem')['msg'] }}
        </div>
      </div>

    </div>
  </div>

  @endif

  @yield('content')
</main>



    </div>


    <div class="container">



    </div>


<footer>
  @include('layouts._site._rodape')

</footer>



    <!-- Scripts -->
    <!-- <script src="/js/app.js"></script> -->

    <!-- Scripts MATERIALIZE-->

    <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>

    <script src="{{asset('js/init.js')}}"></script>




</body>
</html>
