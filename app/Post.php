<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['titulo', 'slug', 'descricao', 'imagem', 'ativo', 'usuarios_id'];
}
