<div class="row section">
  <h3 align='center'> NOSSOS SERVIÇOS </h3>

  <div class="divider">  </div>


  <div class="row section">

    <div class="row section">
    @foreach($servicos as $servico)
      <div class="col s12 m3">
        <div class="card">
          <div class="card-image">
            <a href="servico/{{ $servico->id }}/{{ str_replace(" ","-",$servico->titulo) }}"> <img src="{{ asset($servico->imagem)}}" alt=""> </a>
          </div>
          <div class="card-content">
            <p> <a href="servico/{{ $servico->id }}/{{ str_replace(" ","-",$servico->titulo) }}"><b class="light-blue-text darken-4"> {{ $servico->titulo }}</a> </p></b>
          <br>
            <p class="flow-text menor">  {!! substr($servico->texto,0,200) !!} ...</p>
          </div>
          <div class="card-action">
            <a href="servico/{{ $servico->id }}/{{ str_replace(" ","-",$servico->titulo) }}" class="light-blue-text darken-4">Ver mais...</a>
          </div>
        </div>
      </div>
      @endforeach


  </div>

</div>
