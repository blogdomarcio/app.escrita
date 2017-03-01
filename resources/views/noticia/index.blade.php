@extends('layouts.site')

@section('content')

<nav>
  <div class="container">


   <div class="nav-wrapper">
     <div class="col s12">
       <a href="{{ route('site.home') }}" class="breadcrumb">Página Inicial</a>
       <a href="{{ route('noticia.index') }}" class="breadcrumb">Noticias</a>

     </div>
   </div>
   </div>
 </nav>

<main>
 <div class="container">



      <!-- <h3 aling="center">Nóticias</h3>
      <div class="divider"> </div> -->



      <div class="row section">

        @include('layouts._site._noticias')


        <div class="col s12 m12">


          @foreach($noticias as $noticia)


              <div class="collection">

          <a href="noticia/{{ $noticia->id }}/{{ str_replace(" ","-",$noticia->titulo) }}" class="collection-item">{{ $noticia->titulo }}</a>

          </div>







           @endforeach









        </div>







   

</div>


</div>
</main>

@endsection
