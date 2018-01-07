<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Perfil;
use Validator;

class PerfilController extends Controller
{
  public function index(){
    $registros = Perfil::all();
    return view('admin.perfil', compact('registros'));
  }

  public function editar($id){
    $registro = Perfil::find($id);
    return view('admin.editar-perfil', compact('registros'));
  }

  public function atualizar(Request $req, $id){
    $dados = $req->all();

    $rules = [
      'name'=> 'required',
      'email'=> 'required',
      'senha' => 'required'
    ];

    if($req->hasFile('foto')){
        $img = $req->file('foto');
        $num = rand(1111, 9999);
        $dir = "img/";
        $ex = $img->guessClientExtension();
        $nomeImagem = "foto_".$num.".".$ex;
        $img->move($dir, $nomeImagem);
        $dados['foto'] = $dir."/".$nomeImagem;
    }

    $validate = validator($dados, $rules);

    if( $validate->fails() ){
      return redirect()->route('admin.perfil')->withErrors($validate)->withInput();
    }

    Perfil::find($id)->update($dados);
    return redirect()->route('admin.perfil');
  }

}
