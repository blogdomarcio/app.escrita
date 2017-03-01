@extends('layouts.site')

@section('content')



 <div class="container">

   <div class="row section">

      <h3 aling="center">{{ $pagina->titulo }}</h3>
      <div class="divider"> </div>

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


        <blockquote cite="http://">
          <p>{!! $pagina->texto !!}</p>


      </blockquote>


          <div class="divider">   </div>
          <br>

<h6>{{ $pagina->descricao }}</h6>
          <div class="col s12 m6">

            <form class="col s12" action="{{ route('site.contato.enviar')}}" method="post">
                {{ csrf_field() }}
              <div class="input-field">
                <input type="text" name="nome" value="" class="validate">
                <label for="nome">Nome:</label>
              </div>

              <div class="input-field">
                <input type="email" name="email" value="" class="validate">
                <label for="nome">Email:</label>
              </div>

              <div class="input-field">
                <textarea class="materialize-textarea" name="mensagem"></textarea>
                <label>Mensagem</label>
              </div>
              <button class='btn blue' name="button">Enviar</button>

            </form>

          </div>


        </div>



      </div>

</div>

</div>
@endsection
