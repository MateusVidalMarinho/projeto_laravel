<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(array([
            'id' => 1,
            'nome' => 'cat a',
            'descricao' => 'cat a bla bla'
        ],
        [
            'id' => 2,
            'nome' => 'cat b',
            'descricao' => 'cat b bla bla'
        ],
        [
            'id' => 3,
            'nome' => 'cat c',
            'descricao' => 'cat c bla bla'
        ]));

        DB::table('produtoras')->insert(array([
            'id' => 1,
            'nome' => 'prod a',
            'descricao' => 'prod a bla bla'
        ],
        [
            'id' => 2,
            'nome' => 'prod b',
            'descricao' => 'prod b bla bla'
        ],
        [
            'id' => 3,
            'nome' => 'prod c',
            'descricao' => 'prod c bla bla'
        ]));

        DB::table('jogos')->insert(array([
            'id' => 1,
            'nome' => 'jogo a',
            'descricao' => 'jogo a bla bla',
            'categoria_id' => 1,
            'produtora_id' => 1
        ],
        [
            'id' => 2,
            'nome' => 'jogo b',
            'descricao' => 'jogo b bla bla',
            'categoria_id' => 2,
            'produtora_id' => 2
        ],
        [
            'id' => 3,
            'nome' => 'jogo c',
            'descricao' => 'jogo c bla bla',
            'categoria_id' => 3,
            'produtora_id' => 3
        ]));
    }
}
