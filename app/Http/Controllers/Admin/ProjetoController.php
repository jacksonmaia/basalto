<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Projeto;
use Validator;

class ProjetoController extends Controller
{
  public function index(){
    $registros = Projeto::all();
    return view('admin.projetos', compact('registros'));
  }

  public function cadastrar(){
    return view('admin.novo-projeto');
  }

  public function salvar(Request $req){
    $dados = $req->all();

    $rules = [
      'titulo'=> 'required',
      'descricao'=> 'required',
      'imagem1'=> 'required'
    ];

      if($req->hasFile('imagem1')){
          $img = $req->file('imagem1');
          $num = rand(1111, 9999);
          $dir = "img/";
          $ex = $img->guessClientExtension();
          $nomeImagem = "imagem1_".$num.".".$ex;
          $img->move($dir, $nomeImagem);
          $dados['imagem1'] = $dir."/".$nomeImagem;
      }
      if($req->hasFile('imagem2')){
          $img = $req->file('imagem2');
          $num = rand(1111, 9999);
          $dir = "img/";
          $ex = $img->guessClientExtension();
          $nomeImagem = "imagem2_".$num.".".$ex;
          $img->move($dir, $nomeImagem);
          $dados['imagem2'] = $dir."/".$nomeImagem;
      }
      if($req->hasFile('imagem3')){
          $img = $req->file('imagem3');
          $num = rand(1111, 9999);
          $dir = "img/";
          $ex = $img->guessClientExtension();
          $nomeImagem = "imagem3_".$num.".".$ex;
          $img->move($dir, $nomeImagem);
          $dados['imagem3'] = $dir."/".$nomeImagem;
      }
      if($req->hasFile('imagem4')){
          $img = $req->file('imagem4');
          $num = rand(1111, 9999);
          $dir = "img/";
          $ex = $img->guessClientExtension();
          $nomeImagem = "imagem4_".$num.".".$ex;
          $img->move($dir, $nomeImagem);
          $dados['imagem4'] = $dir."/".$nomeImagem;
      }

      if($req->hasFile('imagem5')){
          $img = $req->file('imagem5');
          $num = rand(1111, 9999);
          $dir = "img/";
          $ex = $img->guessClientExtension();
          $nomeImagem = "imagem5_".$num.".".$ex;
          $img->move($dir, $nomeImagem);
          $dados['imagem5'] = $dir."/".$nomeImagem;
      }
      if($req->hasFile('imagem6')){
          $img = $req->file('imagem6');
          $num = rand(1111, 9999);
          $dir = "img/";
          $ex = $img->guessClientExtension();
          $nomeImagem = "imagem6_".$num.".".$ex;
          $img->move($dir, $nomeImagem);
          $dados['imagem6'] = $dir."/".$nomeImagem;
      }

    $validate = validator($dados, $rules);

    if( $validate->fails() ){
      return redirect()->route('admin.projetos')->withErrors($validate)->withInput();
    }
    Projeto::create($dados);
    return redirect()->route('admin.projetos');
  }

  public function deletar($id){
    Projeto::find($id)->delete();
    return redirect()->route('admin.projetos');
  }

  public function editar($id){
    $registro = Projeto::find($id);
    return view('admin.editar-projeto', compact('registro'));
  }

  public function atualizar(Request $req, $id){
    $dados = $req->all();

    $rules = [
      'titulo'=> 'required',
      'descricao'=> 'required'
    ];

    if($req->hasFile('imagem1')){
        $img = $req->file('imagem1');
        $num = rand(1111, 9999);
        $dir = "img/";
        $ex = $img->guessClientExtension();
        $nomeImagem = "imagem1_".$num.".".$ex;
        $img->move($dir, $nomeImagem);
        $dados['imagem1'] = $dir."/".$nomeImagem;
    }
    if($req->hasFile('imagem2')){
        $img = $req->file('imagem2');
        $num = rand(1111, 9999);
        $dir = "img/";
        $ex = $img->guessClientExtension();
        $nomeImagem = "imagem2_".$num.".".$ex;
        $img->move($dir, $nomeImagem);
        $dados['imagem2'] = $dir."/".$nomeImagem;
    }
    if($req->hasFile('imagem3')){
        $img = $req->file('imagem3');
        $num = rand(1111, 9999);
        $dir = "img/";
        $ex = $img->guessClientExtension();
        $nomeImagem = "imagem3_".$num.".".$ex;
        $img->move($dir, $nomeImagem);
        $dados['imagem3'] = $dir."/".$nomeImagem;
    }
    if($req->hasFile('imagem4')){
        $img = $req->file('imagem4');
        $num = rand(1111, 9999);
        $dir = "img/";
        $ex = $img->guessClientExtension();
        $nomeImagem = "imagem4_".$num.".".$ex;
        $img->move($dir, $nomeImagem);
        $dados['imagem4'] = $dir."/".$nomeImagem;
    }
    if($req->hasFile('imagem5')){
        $img = $req->file('imagem5');
        $num = rand(1111, 9999);
        $dir = "img/";
        $ex = $img->guessClientExtension();
        $nomeImagem = "imagem5_".$num.".".$ex;
        $img->move($dir, $nomeImagem);
        $dados['imagem5'] = $dir."/".$nomeImagem;
    }
if($req->hasFile('imagem6')){
        $img = $req->file('imagem6');
        $num = rand(1111, 9999);
        $dir = "img/";
        $ex = $img->guessClientExtension();
        $nomeImagem = "imagem6_".$num.".".$ex;
        $img->move($dir, $nomeImagem);
        $dados['imagem6'] = $dir."/".$nomeImagem;
    }

    $validate = validator($dados, $rules);

    if( $validate->fails() ){
      return redirect()->route('admin.projetos')->withErrors($validate)->withInput();
    }

    Projeto::find($id)->update($dados);
    return redirect()->route('admin.projetos');
  }
}
