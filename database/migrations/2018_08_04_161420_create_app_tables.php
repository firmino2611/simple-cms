<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('posts', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('id')->unsigned();
            $table->string('titulo', 255);
            $table->string('slug', 255);
		    $table->text('descricao');
		    $table->text('imagem')->nullable();
		    $table->boolean('ativo')->nullable();
		    $table->integer('usuarios_id')->unsigned();
		
		    $table->index('usuarios_id','fk_posts_usuarios1_idx');
		
		    $table->foreign('usuarios_id')
		        ->references('id')->on('usuarios');
		
		    $table->timestamps();
		
		});

		Schema::create('categorias', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('id');
            $table->string('nome', 255);
		    $table->string('slug', 255);
		    $table->longText('descricao')->nullable();
		    $table->boolean('ativo')->nullable();
		    $table->longText('imagem')->nullable();
		    $table->integer('usuarios_id')->unsigned();
		    $table->integer('categorias_id')->nullable();
		
		    $table->index('usuarios_id','fk_categorias_usuarios1_idx');
		    $table->index('categorias_id','fk_categorias_categorias1_idx');
		
		    $table->foreign('usuarios_id')
		        ->references('id')->on('usuarios');
		
		    $table->timestamps();
		
		});

		Schema::create('configuracoes', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->string('tipo', 150);
		    $table->string('nome', 255)->nullable();
		    $table->string('valor', 45)->nullable();
		
		    $table->timestamps();
		
		});

		Schema::create('paginas', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('id')->comment('	');
		    $table->string('titulo', 255);
		    $table->longText('descricao')->nullable();
		    $table->string('slug', 255);
		    $table->longText('imagem')->nullable();
		
		    $table->timestamps();
		
		});

		Schema::create('comentarios', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('id');
		    $table->integer('avaliacao')->nullable();
		    $table->longText('descricao')->nullable();
		    $table->boolean('valido')->nullable()->default(1);
		    $table->integer('posts_id')->unsigned();
		    $table->integer('comentarios_id')->nullable();
		
		    $table->index('posts_id','fk_comentarios_posts1_idx');
		    $table->index('comentarios_id','fk_comentarios_comentarios1_idx');
		
		    $table->foreign('posts_id')
		        ->references('id')->on('posts');
		
		    $table->timestamps();
		
		});


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('comentarios');
		Schema::drop('paginas');
		Schema::drop('configuracoes');
		Schema::drop('categorias');
		Schema::drop('role_usuario');
		Schema::drop('posts');

    }
}