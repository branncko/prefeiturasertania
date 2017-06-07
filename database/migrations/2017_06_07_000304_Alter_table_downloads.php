<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableDownloads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('downloads', function (Blueprint $table) {

            $table->dropColumn('photo')->nullable();


            $table->dropColumn('ativo');

            $table->dropColumn('texto');
            $table->integer('quantidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('downloads', function (Blueprint $table) {
            $table->string('title');
            $table->string('arquivo');

            $table->string('photo')->nullable();


            $table->boolean('ativo');

            $table->longText('texto');
            $table->longText('sobre');
        });
    }
}
