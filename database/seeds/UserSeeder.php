<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $dados = [
      'name'=>"admin",
      'email'=>"admin@gmail.com",
      'password'=>bcrypt('admin'),
      'foto'=>"fotooo",
    ];
    if(Usuario::where('email', '=', $dados['email'])->count()){
      $usuario = Usuario::where('email', '=', $dados['email'])->first();
      $usuario->update($dados);
      echo "Usuario Alterado !";
    }else{
      Usuario::create($dados);
      echo "Usuario criado !";
    }
  }
}
