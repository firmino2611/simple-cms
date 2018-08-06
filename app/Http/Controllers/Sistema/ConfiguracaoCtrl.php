<?php

namespace App\Http\Controllers\Sistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Support\Facades\Configuracao;

class ConfiguracaoCtrl extends Controller
{
    public function editar(){
        return view('sistema.configuracoes.formulario');
    }

    public function salvar(Request $request){
        // return $request->all();
        foreach($request->all() as $chave => $config){
            if($chave != '_token')
                Configuracao::setValue($chave, $config);
        }
        if($request->hasFile('logo')){
            $logo = $request->logo->storeAs('configs/site', 
                                    str_replace(' ', '_', $request->logo->getClientOriginalName()) . '.' . $request->logo->getClientOriginalExtension());
            Configuracao::setValue('logo', $logo);
        }

        if($request->hasFile('favicon')){
            $favicon = $request->favicon->storeAs('configs/site', 
                                str_replace(' ', '_', $request->favicon->getClientOriginalName()) . '.' . $request->favicon->getClientOriginalExtension());
            Configuracao::setValue('favicon', $favicon);
        }

        $request->session()->flash('alerta', [
            'mensagem' => 'Atualizado com sucesso!',
            'alerta' => 3,
        ]);

        return redirect()->route('config.editar');
    }
}
