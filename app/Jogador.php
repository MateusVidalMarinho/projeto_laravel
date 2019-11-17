<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    protected $fillable=['nome','email'];
    public $timestamps=false;

    public function jogos() {
        return $this->belongsToMany('App\Jogo', 'jogador_jogos');
    }
}
