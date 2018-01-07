<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
  protected $fillable = [
      'nome', 'senha', 'email', 'foto',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];
}
