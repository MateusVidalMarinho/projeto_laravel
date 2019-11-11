<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogadorJogoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogador_jogo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("jogo_id")->unsigned();
            $table->foreign("jogo_id")->references('id')->on("jogos");
            $table->integer("jogador_id")->unsigned();
            $table->foreign("jogador_id")->references('id')->on("jogadors");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogador_jogos');
    }
}
