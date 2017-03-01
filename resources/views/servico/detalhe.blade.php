@extends('layouts.site')

@section('content')






   <nav>
     <div class="container">


      <div class="nav-wrapper">
        <div class="col s12">
          <a href="{{ route('site.home') }}" class="breadcrumb">Página Inicial</a>
          <a href="{{ route('servico.index') }}" class="breadcrumb">Nossos Serviços</a>
          <a href="#!" class="breadcrumb">{{ $servicos->titulo }}</a>
        </div>
      </div>
      </div>
    </nav>

     <div class="container">
   <div class="row section">

      <h3 aling="center">{{ $servicos->titulo }}</h3>
      <div class="divider"> </div>

      <div class="row section">

        <div class="col m3 s12">

          <img class="responsive-img z-depth-4" src="{{ asset($servicos->imagem) }}" alt="">

        </div>

        <div class="col m9 s12">

      {!! $servicos->texto !!}

        </div>





</div>

      <div class="divider"> </div>




      </div>

</div>


@endsection
