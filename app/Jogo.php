<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $fillable=['nome', 'descricao'];
    public $timestamps=false;

    public function categoria() {
        return $this->belongsTo('App\Categoria', 'categoria_id', 'id');
    }

    public function produtora() {
        return $this->belongsTo('App\Produtora', 'produtora_id', 'id');
    }

    public function jogadorJogo() {
        return $this->belongsToMany('App\Jogador');
    }
}
