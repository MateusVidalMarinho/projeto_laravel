<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->text('descricao')->nullable();
            $table->integer("categoria_id")->unsigned();
            $table->foreign("categoria_id")->references('id')->on("categorias");
            $table->integer("produtora_id")->unsigned();
            $table->foreign("produtora_id")->references('id')->on("produtoras");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogos');
    }
}
