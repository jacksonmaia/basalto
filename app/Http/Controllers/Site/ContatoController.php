<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contato;
use Validator;

class ContatoController extends Controller
{
    public function index()
    {
        return view('Site.contato');
    }

    public function salvar(Request $req){
      $dados = $req->all();
      /*
      $rules = [
        'name'=> 'required',
        'sobrenome'=> 'required',
        'email'=> 'required',
        'telefone'=> 'required',
        'mensagem'=> 'required'
      ];

      $validate = validator($dados, $rules);

      if( $validate->fails() ){
        return redirect()->route('menu.contato')->withErrors($validate)->withInput();
      }
      */

      Contato::create($dados);
      return redirect()->route('menu.contato');
    }
}
