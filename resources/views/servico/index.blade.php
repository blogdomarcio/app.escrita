@extends('layouts.site')

@section('content')

<nav>
  <div class="container">


   <div class="nav-wrapper">
     <div class="col s12">
       <a href="{{ route('site.home') }}" class="breadcrumb">Página Inicial</a>
       <a href="{{ route('servico.index') }}" class="breadcrumb">Serviços</a>

     </div>
   </div>
   </div>
 </nav>

 <div class="container">

   <div class="row section">

      <h3 aling="center">Nossos Serviços</h3>
      <div class="divider"> </div>

      <div class="row section">




        <div class="col s12 m12">





          @foreach($servicos as $servico)



        <div class="collection">
          <a href="servico/{{ $servico->id }}/{{ str_replace(" ","-",$servico->titulo) }}" class="collection-item">{{ $servico->titulo }}</a>
        </div>


           @endforeach



        </div>







      </div>

</div>

</div>
@endsection
