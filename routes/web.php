<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// ADMIN

Route::get('/admin', function () {
    return view('admin');
});


Route::get('/admin/login',['as' => 'admin.login', function(){
    return view('admin.login.index');
}]);


Route::post('admin/login',['as' => 'admin.login', 'uses' => 'Admin\AdminController@login']);


// ESCRITA NET

Route::get('/escritanet', function () {
    return view('escritanet');
});

Route::get('/escritanet/',['as' => 'escritanet.principal', function(){
    return view('escritanet.principal.index');
}]);


Route::get('/escritanet/login',['as' => 'escritanet.login', function(){
    return view('escritanet.login.index');
}]);


Route::post('escritanet/login',['as' => 'escritanet.login', 'uses' => 'Admin\UsuarioController@login']);

// SITE

Route::get('/', function () {
    return view('site');
});

