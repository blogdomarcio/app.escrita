<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;
use App\Categoria;
use App\Tipo;

class NoticiaController extends Controller
{
  public function index()
  {

    // $noticias = Noticia::all();
    $noticias = Noticia::where('publicar','=','sim')->orderBy('id','desc')->paginate(12);
    // $servicos = Servico::orderBy('titulo')->get();
    $categorias = Categoria::orderBy('titulo')->get();
    $paginacao = true;

    return view('noticia.index', compact('noticias','categorias','paginacao'));
  }

  public function detalhe($id)
  {
    $noticias = Noticia::find($id);

    $seo = [
    	'titulo'=>$noticias->titulo,
			'descricao'=>$noticias->descricao,
			'imagem'=>asset($noticias->imagem),
			'url'=> route('noticia.detalhe',[$noticias->id,str_slug($noticias->titulo,'_')])
    	];

    return view('noticia.detalhe', compact('noticias','seo'));

  }
}
