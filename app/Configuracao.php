<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracao extends Model
{
    protected $table = 'configuracoes';
    protected $fillable = ['tipo', 'nome', 'valor'];
}
