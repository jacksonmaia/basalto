<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Texto;
use Validator;


class TextoController extends Controller
{
  public function index(){
    return view('admin.novo-texto');
  }

  public function selectByTipo(Request $req){
    $select = Input::get('select');
    $registro = Texto::find($select);
    return view('admin.editar_texto', compact('registro'));
  }

  public function atualizar(Request $req, $id){
    $dados = $req->all();
    Texto::find($id)->update($dados);
    return redirect()->route('admin.textos');
  }
}
