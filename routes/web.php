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
//Site
Route::get('/', ['as'=>'menu.index', 'uses' => 'Site\HomeController@index']); //Feito
Route::get('/Site/sobre-projeto', ['as'=>'menu.sobre', 'uses' => 'Site\SobreController@index']); //Feito
Route::get('/Site/projeto', ['as'=>'menu.projeto', 'uses' => 'Site\ProjetoController@index']);//Feito
Route::get('/Site/contato', ['as'=>'menu.contato', 'uses' => 'Site\ContatoController@index']);//Feito
Route::get('/Site/slide/{id}', ['as'=>'menu.slide', 'uses' => 'Site\ProjetoController@slide']);//Feito

Route::post('/Site/contatos/salvar', ['as'=>'menu.salvar.contato', 'uses' => 'Site\ContatoController@salvar']);//Feito

//Login
Route::get('/login', ['as'=>'login', 'uses' => 'Site\LoginController@index']);
Route::get('/login/sair', ['as'=>'login.sair', 'uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar', ['as'=>'admin.login.entrar', 'uses'=>'Site\LoginController@entrar']);

Route::group(['middleware'=>'auth'], function(){

  //Admin
  Route::get('/admin', ['as'=>'admin.index', 'uses'=>'Admin\HomeController@index']);//Feito

  //Projetos
  Route::get('/admin/projetos/cadastrar', ['as'=>'admin.cadastrar.projeto', 'uses' => 'Admin\ProjetoController@cadastrar']);//Feito
  Route::post('/admin/projetos/salvar', ['as'=>'admin.salvar.projeto', 'uses' => 'Admin\ProjetoController@salvar']);//Feito
  Route::get('/admin/projetos', ['as'=>'admin.projetos', 'uses' => 'Admin\ProjetoController@index']);//Feito
  Route::get('/admin/projetos/apagar/{id}', ['as'=>'admin.apagar.projeto', 'uses' => 'Admin\ProjetoController@deletar']);//Feito
  Route::get('/admin/projetos/editar/{id}', ['as'=>'admin.editar.projeto', 'uses' => 'Admin\ProjetoController@editar']);//Feito
  Route::put('/admin/projetos/atualizar/{id}', ['as'=>'admin.atualizar.projeto', 'uses' => 'Admin\ProjetoController@atualizar']);//Feito

  //Textos
  Route::get('/admin/textos', ['as' => 'admin.textos', 'uses' => 'Admin\TextoController@index']);
  Route::get('/admin/textos/show', ['as' => 'admin.textos.show', 'uses' => 'Admin\TextoController@selectByTipo']);
  Route::put('/admin/textos/atualizar/{id}', ['as'=>'admin.textos.atualizar', 'uses' => 'Admin\TextoController@atualizar']);

  //Perfil/Usuario
  Route::get('/admin/perfil', ['as' => 'admin.perfil', 'uses' => 'Admin\UsuarioController@index']);
  Route::get('/admin/perfil/editar/{id}', ['as'=>'admin.perfil.editar', 'uses' => 'Admin\UsuarioController@editar']);
  Route::put('/admin/perfil/atualizar/{id}', ['as'=>'admin.perfil.atualizar', 'uses' => 'Admin\UsuarioController@atualizar']);

  //Contato
  Route::get('/admin/contatos', ['as'=>'admin.contatos', 'uses' => 'Admin\ContatoController@index']);//Feito
  Route::get('/admin/contatos/apagar/{id}', ['as'=>'admin.contatos.apagar', 'uses' => 'Admin\ContatoController@deletar']);//Feito

});
