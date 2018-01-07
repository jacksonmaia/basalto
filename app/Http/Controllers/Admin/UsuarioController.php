<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Usuario;

class UsuarioController extends Controller
{
    //
  public function index(){
    $registros = Usuario::all();
    return view('admin.perfil', compact('registros'));
  }

  public function editar($id){
    $registros = Usuario::find($id);
    return view('admin.editar-perfil', compact('registros'));
  }

  public function atualizar(Request $req, $id){
    $dados = $req->all();

    $rules = [
      'name'=> 'required',
      'email'=> 'required',
      'password' => 'required'
    ];

    if($req->hasFile('foto')){
        $img = $req->file('foto');
        $num = rand(1111, 9999);
        $dir = "img/";
        $ex = $img->guessClientExtension();
        $nameImagem = "foto_".$num.".".$ex;
        $img->move($dir, $nameImagem);
        $dados['foto'] = $dir."/".$nameImagem;
    }

    $validate = validator($dados, $rules);

    if( $validate->fails() ){
      return redirect()->route('admin.perfil')->withErrors($validate)->withInput();
    }

    Usuario::find($id)->update($dados);
    return redirect()->route('admin.perfil');
  }

}
