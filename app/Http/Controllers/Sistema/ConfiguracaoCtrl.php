<?php

namespace App\Http\Controllers\Sistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfiguracaoCtrl extends Controller
{
    public function editar(){
        return view('sistema.configuracoes.formulario');
    }
}
