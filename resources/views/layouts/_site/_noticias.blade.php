<div class="row section">
  <h3 align='center'> ÚLTIMAS NOTICIAS / ARTIGOS </h3>

  <div class="divider">  </div>
  <br>
  <br>
  @include('layouts._site._filtros')

  <div class="row section ">
  @foreach($noticias as $noticia)
    <div class="col s12 m3">
      <div class="card">
        <div class="card-image">
          <a href="noticia/{{ $noticia->id }}/{{ str_replace(" ","-",$noticia->titulo) }}"> <img src="{{ asset($noticia->imagem)}}" alt=""> </a>
        </div>
        <div class="card-content">
          <p> <a href="noticia/{{ $noticia->id }}/{{ str_replace(" ","-",$noticia->titulo) }}"><b class="light-blue-text darken-4"> {{ $noticia->titulo }}</a> </p></b>
        <br>
          <p class="flow-text menor notlink"> <a href="noticia/{{ $noticia->id }}/{{ str_replace(" ","-",$noticia->titulo) }}"> {!! substr($noticia->texto,0,215) !!}...</p> </a>
        </div>
        <div class="card-action">
          <a href="noticia/{{ $noticia->id }}/{{ str_replace(" ","-",$noticia->titulo) }}" class="light-blue-text darken-4">Ver mais...</a>
        </div>
      </div>
    </div>
    @endforeach





  </div>

@if($paginacao)
<div class="row" align="center">


  {{ $noticias->links() }}

</div>
@endif

</div>
