<?php

namespace App\Http\Controllers\Sistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Conteudo;

class ConteudoCtrl extends Controller
{
    public function __construct(){
        view()->share('publicados', Conteudo::where('ativo', true)->get());
        view()->share('inativos', Conteudo::where('ativo', false)->get());
    }

    public function index(){
        return view('sistema.conteudos.index')->with('conteudos', Conteudo::all());
    }

    public function criar(){
        return view('sistema.conteudos.criar');
    }
}
