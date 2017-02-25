<?php



Route::post('admin/login',['as' => 'admin.login', 'uses' => 'Admin\AdminController@login']);

Route::get('/admin/login',['as' => 'admin.login', function(){
    return view('admin.login.index');
}]);





// MIDLEWARE ADMIN
Route::group([ 'middleware' => ['auth:admin']], function (){




});


Route::get('/admin/',['as' => 'admin.principal', function(){
    return view('admin.principal.index');
}]);



   
// Route::get('/escritanet/login', 'Escritanet\AuthController@webLogin');
// Route::post('/escritanet/login', ['as'=>'escritanet.login','uses'=>'Escritanet\AuthController@webLoginPost']);


  




// ADMIN

 


 


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


Route::post('escritanet/login',['as' => 'escritanet.login', 'uses' => 'EscritaNet\UsuarioController@login']);

// SITE

Route::get('/', function () {
    return view('site');
});


 
 
