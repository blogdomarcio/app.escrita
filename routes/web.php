<?php



Route::group(['middleware' => ['web']], function () {

	Route::get('escritanet/login', 'Auth\AuthController@webLogin');
	Route::post('escritanet/login', ['as'=>'escritanet.login','uses'=>'Auth\AuthController@webLoginPost']);
	Route::get('/admin/login', 'Auth\AdminAuthController@adminLogin');
	Route::post('/admin/login', ['as'=>'admin.login','uses'=>'Auth\AdminAuthController@adminLoginPost']);
});



Route::group([ 'middleware' => ['auth:web']], function (){   

	Route::get('/escritanet',['as'=>'escritanet.principal', 'uses'=>'EscritaNet\DashboardController@index']);
	Route::get('/escritanet/logout', ['as'=>'escritanet.logout', 'uses'=>'Auth\AuthController@logout']);  

});

Route::group([ 'middleware' => ['auth:admin']], function (){

	Route::get('/admin/logout', ['as'=>'admin.logout', 'uses'=>'Auth\AdminAuthController@logout']);   
	Route::get('/admin',['as'=>'admin.principal', 'uses'=>'Admin\DashboardController@index']);
	Route::get('/admin/admin',['as'=>'admin.admin', 'uses'=>'Admin\AdminController@index']);

});



// Route::post('admin/login',['as' => 'admin.login', 'uses' => 'Admin\AdminController@login']);

// Route::get('/admin/login',['as' => 'admin.login', function(){
//     return view('admin.login.index');
// }]);


// // MIDLEWARE ADMIN
// Route::group([ 'middleware' => ['auth:admin']], function (){




// });


// Route::get('/admin/',['as' => 'admin.principal', function(){
//     return view('admin.principal.index');
// }]);




// Route::get('/escritanet/login', 'Escritanet\AuthController@webLogin');
// Route::post('/escritanet/login', ['as'=>'escritanet.login','uses'=>'Escritanet\AuthController@webLoginPost']);







// ADMIN







// ESCRITA NET




// Route::get('/escritanet/login',['as' => 'escritanet.login', function(){
//     return view('escritanet.login.index');
// }]);


// Route::post('escritanet/login',['as' => 'escritanet.login', 'uses' => 'EscritaNet\UsuarioController@login']);

// // SITE

// Route::get('/', function () {
// 	return view('site.home');
// });


//-------------------- HOME E SOBRE -----------------------------

Route::get('/', ['as'=>'site.home', 'uses'=>'Site\PaginaController@index']);

Route::get('/sobre', ['as'=>'site.sobre', 'uses'=>'Site\PaginaController@sobre']);

//-------------------- CONTATO -----------------------------

Route::get('/contato', ['as'=>'site.contato', 'uses'=>'Site\PaginaController@contato']);

Route::post('/contato/enviar', ['as'=>'site.contato.enviar', 'uses'=>'Site\PaginaController@enviarContato']);

//-------------------- LOGIN -----------------------------

Route::get('/noticia', ['as'=>'noticia.index', 'uses'=>'Site\NoticiaController@index']);
Route::get('/noticia/{id}/{titulo?}', ['as'=>'noticia.detalhe', 'uses'=>'Site\NoticiaController@detalhe']);

//-------------------- SERVIÇO SITE -----------------------------

Route::get('/servico', ['as'=>'servico.index', 'uses'=>'Site\ServicoController@index']);
Route::get('/servico/{id}/{titulo?}', ['as'=>'servico.detalhe', 'uses'=>'Site\ServicoController@detalhe']);

//-------------------- BUSCA SITE -----------------------------

Route::get('/busca', ['as'=>'site.busca', 'uses'=>'Site\PaginaController@busca']);




