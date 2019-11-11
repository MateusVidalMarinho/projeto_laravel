<?php

namespace App\Http\Controllers;

use App\Jogo;
use App\Jogador;
use App\JogadorJogos;
use Illuminate\Http\Request;

class JogadorJogosController extends Controller
{
    public function index()
    {
        $jogadorJogos = JogadorJogos::all();
        return view('jogadorJogos.index')->with('jogadorJogos', $jogadorJogos);
    }

    public function create()
    {
        $jogadores = Jogador::all();
        $jogos = Jogo::all();
        return view ('jogadorJogos.create', ['jogadores' => $jogadores, 'jogos' => $jogos]);
    }

    public function store(Request $request)
    {
        $jogador = Jogador::find($request->all()['jogador_id']);
        $jogo = Jogo::find($request->all()['jogo_id']);
        $jogo->jogadors()->attach($jogador);

        return redirect('jogador-jogos');
    }

    public function show(JogadorJogos $jogadorJogos)
    {
        //
    }

    public function edit(JogadorJogos $jogadorJogos)
    {
        $jogadores = Jogador::all();
        $jogos = Jogo::all();
        return view('jogadorJogos.edit', ['jogadores' => $jogadores, 'jogos' => $jogos]);
    }

    public function update(Request $request, JogadorJogos $jogadorJogos)
    {
        $jogadorJogos->update($request->all());
        return redirect('jogador-jogos');
    }

    public function destroy(JogadorJogos $jogadorJogos)
    {
        //
    }
}
