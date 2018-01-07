<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
  protected $fillable = [
      'titulo', 'descricao', 'imagem1', 'imagem2', 'imagem3', 'imagem4', 'imagem5', 'imagem6',
  ];
}
