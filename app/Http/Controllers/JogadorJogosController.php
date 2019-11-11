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
        // $request->except('_token');

        // $jogador = Jogador::find(1);
        // $jogo = new Jogo($request->all());
        // $jogo->jogadorJogo()->attach($jogador);

        $jogadorJogos = new JogadorJogos($request->except('_token'));
        // $jogador = Jogador::find($request->all()['jogador_id']);
        // var_dump($jogador);exit;
        $jogadorJogos->jogador = Jogador::find($request->all()['jogador_id']);
        $jogadorJogos->jogos = Jogo::find($request->all()['jogo_id']);
        // $jogadorJogos->jogador_id = $request->all()['jogador_id'];
        // $jogadorJogos->jogo_id = $request->all()['jogo_id'];
        $jogadorJogos->save();

        // var_dump($request->all());exit;
        // JogadorJogos::create($request->all());
        return redirect('jogadorJogos');
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
        return redirect('jogadorJogos');
    }

    public function destroy(JogadorJogos $jogadorJogos)
    {
        //
    }
}
