<?php

namespace App\Http\Controllers;

use App\Jogo;
use App\Jogador;
use App\JogadorJogos;
use Illuminate\Http\Request;

class JogadorJogosController extends Controller
{
    public function __construct(Request $request) {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $jogadorJogos = Jogador::with('jogos')->get();
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
        var_dump($jogadorJogos);
        $jogadores = Jogador::all();
        $jogos = Jogo::all();
        // $jogador_jogos = JogadorJogos::all();
        $jogador_jogos = Jogador::with('jogos')->get();
        return view('jogadorJogos.edit', ['jogadorJogos' => $jogadorJogos, 'jogadores' => $jogadores, 'jogos' => $jogos]);
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
