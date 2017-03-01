@extends('layouts.site')

@section('content')

<nav>
  <div class="container">


   <div class="nav-wrapper">
     <div class="col s12">
       <a href="{{ route('site.home') }}" class="breadcrumb">Página Inicial</a>
       <a href="#!" class="breadcrumb">Sobre</a>

     </div>
   </div>
   </div>
 </nav>

 <div class="container">

   <div class="row section">


     

      <div class="row section">

        <div class="col s12 m4">

          @if(isset($pagina->mapa))

          <div class="video-container">

            {!! $pagina->mapa !!}

          </div>

          @else

          <img class="responsive-img" src="{{ asset($pagina->imagem) }}" alt="">

          @endif


        </div>


        <div class="col s12 m8">
        <h4>{{ $pagina->titulo }}</h4>

        <blockquote cite="http://">
          {{ $pagina->descricao }}
        </blockquote>


        <div class="">
          <p>{!! $pagina->texto !!}</p>
        </div>

        </div>




      </div>

</div>

</div>
@endsection
