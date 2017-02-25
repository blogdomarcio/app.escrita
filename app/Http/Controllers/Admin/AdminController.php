<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Alert;

class AdminController extends Controller
{
	
	public function login(Request $request)
	{
		$dados = $request->all();

       // dd($dados);

		if(Auth::attempt(['username'=>$dados['username'],'password'=>$dados['password']])){

//            \Session::flash('mensagem',['msg'=>'Login realizado com sucesso!','class'=>'green white-text']);

			return redirect()->route('admin.principal');
		}

		Alert::error('Usuário ou senha inválidos! Tente Novamente', 'Oops!');

		return redirect()->route('admin.login');

	}
}
