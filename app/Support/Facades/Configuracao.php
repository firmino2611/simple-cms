<?php

namespace App\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Configuracao extends Facade
{
    protected static function getFacadeAccessor(){
        return 'configuracao';
    }
}
