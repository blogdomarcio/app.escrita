@extends('layouts.admin')


@section('content')


 
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a class="active"">Página Inicial</a>
                            </li>

                           <!--  <li>
                                <a href="#">Other Pages</a>
                            </li>
                            <li class="active">Blank Page</li> -->
                        </ul><!-- /.breadcrumb -->

                         
 </div>

 <br>
    <p>Seja bem vindo, {{ Auth::user()->name }}</p>


@endsection