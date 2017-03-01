<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Servico;

class ServicoController extends Controller
{
  public function index()
  {
    $servicos = Servico::all();

    return view('servico.index', compact('servicos'));
  }

  public function detalhe($id)
  {
    $servicos = Servico::find($id);

    return view('servico.detalhe', compact('servicos'));

  }
}
