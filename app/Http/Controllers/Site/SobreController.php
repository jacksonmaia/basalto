<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Texto;


class SobreController extends Controller
{
    public function index()
    {
        $registros = Texto::all();
        return view('Site.sobre-empresa',  compact('registros'));
    }
}

