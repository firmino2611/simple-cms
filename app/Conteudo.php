<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    protected $table = 'conteudos';
    protected $fillable = ['titulo', 'slug', 'descricao', 'imagem', 'ativo', 'usuarios_id'];
}
