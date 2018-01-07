<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Projeto;

class ProjetoController extends Controller
{
    public function index()
    {
        $registros = Projeto::all();
        return view('Site.projeto', compact('registros'));
    }
    public function slide($id)
    {
        $registros = Projeto::find($id);
        return view('Site.slide', compact('registros'));
    }
}
