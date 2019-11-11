<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtora extends Model
{
    protected $fillable=['nome', 'descricao'];
    public $timestamps=false;

    public function jogos() {
        return $this->hasMany('App\Jogo', 'jogo_id');
    }
}
