<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contato;

class ContatoController extends Controller
{
  public function index(){
    $registros = Contato::all();
    return view('admin.contato', compact('registros'));
  }

  public function deletar($id){
    Contato::find($id)->delete();
    return redirect()->route('admin.contatos');
  }
}
