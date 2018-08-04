<?php

namespace App\Support\Facades\Config;

use App\Configuracao as Config;

class Configuracao
{
    /**
     * Pega um valor de configuracao, especificando o nome da configuracao
     */
    public function getValue($name){
        return json_decode(Config::where('nome', $name)->get()->first()->valor);
    }

    public function getName($name){
        return json_decode(Config::where('nome', $name)->get()->first()->nome);
    }

    public function getType($type){
        return json_decode(Config::where('tipo', $type)->get(['valor']));
    }

    public function setValue($name, $value){
        $config = Config::where('nome', $name)->update(['valor' => json_encode($value)]);
        return true;
    }

    public function createNewConfig($type, $name, $value){
        Config::create(array(
            'tipo' => $type,
            'nome' => str_slug($name, '_'),
            'valor' => json_encode($value),
        ));
    }
}
