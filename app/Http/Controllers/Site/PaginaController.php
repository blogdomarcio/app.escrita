<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pagina;
use App\Noticia;
use App\Servico;
use App\Categoria;

class PaginaController extends Controller

{

    public function index()
    {
      $noticias = Noticia::where('publicar','=','sim')->orderBy('id','desc')->paginate(4);
      $servicos = Servico::orderBy('titulo')->get();
      $categorias = Categoria::orderBy('titulo')->get();
      $paginacao = true;
      return view('site.home', compact('noticias','servicos','paginacao','categorias'));
    }

     public function sobre()
    {
      $pagina = Pagina::where('tipo','=','sobre')->first();
      return view('site.sobre', compact('pagina'));
    }

    public function contato()
    {
      $pagina = Pagina::where('tipo','=','contato')->first();
      return view('site.contato', compact('pagina'));
    }

    public function enviarContato(Request $request)
    {
      $pagina = \App\Pagina::where('tipo','=','contato')->first();
      $email = $pagina->email;

      \Mail::send('emails.contato',['request'=>$request],
      function($m) use($request,$email){
        $m->from($request['email'], $request['nome']);
        $m->replyTo($request['email'], $request['nome']);
        $m->to($email, 'Contato do Site');
        $m->subject('Contato via Site');

      } );

      \Session::flash('mensagem',['msg'=>'Mensagem enviada com Sucesso','class'=>'green white-text']);
      return redirect()->route('site.contato');
    }


    public function busca(Request $request)
    {
      $busca = $request->all();
      $categorias = Categoria::orderBy('titulo')->get();

      if($busca['categoria_id'] == 'todos'){
      		$testeCategoria = [
      			['categoria_id','<>',null]
      		];
      	}else{
      		$testeCategoria = [
      			['categoria_id','=',$busca['categoria_id']]
      		];
      	}


        if($busca['noticia'] != ''){
        		$testeNoticia = [
        			['titulo','like','%'.$busca['noticia'].'%']
        		];
        	}else{
        		$testeNoticia = [
        			['assunto','<>',null]
        		];
        	}




      if($busca['assunto'] != ''){
      		$testeAssunto = [
      			['texto','like','%'.$busca['assunto'].'%']
      		];
      	}else{
      		$testeAssunto = [
      			['assunto','<>',null]
      		];
      	}

        $noticias = Noticia::where('publicar','=','sim')
        ->where($testeCategoria)
        ->where($testeAssunto)
        ->where($testeNoticia)
        ->orderBy('id','desc')->get();

      $paginacao = false;
      // dd($busca);


      return view('site.busca', compact('busca','noticias','paginacao','categorias'));
    }
}
