@extends('layouts.admin')


@section('content')


 
<div class="breadcrumbs ace-save-state" id="breadcrumbs">

                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="{{ route('admin.principal') }}">Página Inicial</a>
                            </li>

                            <li>
                                <a class="active" >Cadastro de Funcionários </a>
                            </li>
                             
                        </ul><!-- /.breadcrumb -->

                         
 </div>

   <h2> Cadastros de Funcionários </h2>

 {{ $admins }}


@endsection