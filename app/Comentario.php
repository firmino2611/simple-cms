<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';
    protected $fillable = ['avaliacao', 'descricao', 'valido', 'posts_id', 'comentarios_id'];
}
