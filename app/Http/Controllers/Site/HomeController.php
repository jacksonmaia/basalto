<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Projeto;
use Validator;
use Illuminate\Support\Collection;



class HomeController extends Controller
{
    public function index()
    {
        $todos = Projeto::all();

        $collection = new Collection([]);

        foreach ($todos as $key => $todo) {
            $collection->push($todo->id);
        }

        $escolha = array_random($collection->all());
        $registro = Projeto::find($escolha);
        return view('Site.index', compact('registro'));
    }
}
