<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {

            $table->increments('id');
            $table->string('assunto');
            $table->longText('comentario');
            $table->boolean('liberado');

            $table->integer('user_id')->unsigned();;
            $table->foreign('user_id')->
                    references('id')->
                    on('users')->
                    onDelete('cascade');

            $table->integer('noticias_id')->unsigned();;
            $table->foreign('noticias_id')->
                    references('id')->
                    on('noticias')->
                    onDelete('cascade');

            $table->softDeletes();
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
        Schema::dropIfExists('comentarios');
    }
}
