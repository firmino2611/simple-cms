<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['nome', 'slug', 'descricao', 'ativo', 'imagem', 'usuarios_id', 'categorias_id'];

    
}
