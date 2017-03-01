<div class="row">

   <form action="{{ route('site.busca')}}">


       <div class="input-field col s12 m3">
       <select name="categoria_id">
        <option {{ isset($busca['categoria_id']) && $busca['categoria_id'] == 'todos' ? 'selected' : '' }} value="todos">Todas os Categorias</option>

@foreach($categorias as $categoria)

         <option {{ isset($busca['categoria_id']) && $busca['categoria_id'] == $categoria->id ? 'selected' : '' }} value="{{$categoria->id}}"> {{ $categoria->titulo }} </option>
@endforeach
      </select>

         <label> Categoria </label>
     </div>


     <div class="input-field col s12 m3">

        <input class="validate" type="text" name="noticia" value="{{ isset($busca['noticia'])  ? $busca['noticia'] : '' }}">
         <label> Pesquise por Notícia</label>

     </div>


     <div class="input-field col s12 m3">

        <input class="validate" type="text" name="assunto" value="{{ isset($busca['assunto'])  ? $busca['assunto'] : '' }}">
         <label> Pesquise por assunto</label>

     </div>



  <div class="input-field col s12 m3">
    <button class="btn deep-range darken-1 right">
      Filtrar
    </button>
 </div>

   </form>

</div>
