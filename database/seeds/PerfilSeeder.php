<?php

use Illuminate\Database\Seeder;
use App\Perfil;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $dados = [
        'nome'=>"basalto",
        'senha'=>bcrypt('basalto123'),
        'email'=>"basalto@gmail.com",
        'foto'=>"kkkkkkkkkk",
      ];
      if(Perfil::where('email', '=', $dados['email'])->count()){
        $perfil = Perfil::where('email', '=', $dados['email'])->first();
        $perfil->update($dados);
        echo "Usuario Alterado !";
      }else{
        Perfil::create($dados);
        echo "Usuario criado !";
      }
    }
}
