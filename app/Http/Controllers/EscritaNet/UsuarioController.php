<?php

namespace App\Http\Controllers\EscritaNet;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
        $dados = $request->all();

//        dd($dados);

        if(Auth::attempt(['username'=>$dados['username'],'password'=>$dados['password']])){

//            \Session::flash('mensagem',['msg'=>'Login realizado com sucesso!','class'=>'green white-text']);

            return redirect()->route('escritanet.principal');
        }

//        \Session::flash('mensagem',['msg'=>'Erro! Confira seus dados.','class'=>'red white-text']);

        return redirect()->route('escritanet.login');

    }
}
