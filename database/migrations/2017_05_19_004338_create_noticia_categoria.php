<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiaCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia_categoria', function (Blueprint $table) {
            $table->integer('noticia_id')->unsigned();
            $table->foreign('noticia_id')->
            references('id')->
            on('noticias');

            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->
            references('id')->
            on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticia_categoria');
    }
}
