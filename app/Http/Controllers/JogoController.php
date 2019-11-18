<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Jogo;
use App\Produtora;
use App\Dlc;
use Illuminate\Http\Request;

class JogoController extends Controller
{
    public function __construct(Request $request) {
        $this->middleware('auth', ['except' => ['index']]);
    }
    
    public function index()
    {
        $jogos = Jogo::all();

        return view('jogo.index')->with('jogos', $jogos);
    }

    public function create()
    {
        $categorias = Categoria::all();
        $produtoras = Produtora::all();
        $dlcs = Dlc::all();
        return view ('jogo.create', ['categorias' => $categorias, 'produtoras' => $produtoras, 'dlcs' => $dlcs]);
    }

    public function store(Request $request)
    {
        $jogo = new Jogo($request->all());
        $jogo->categoria_id = $request->all()['categoria_id'];
        $jogo->produtora_id = $request->all()['produtora_id'];
        $jogo->dlc_id = $request->all()['dlc_id'];
        $jogo->save();
        return redirect('jogo');
    }

    public function show(Jogo $jogo)
    {
        //
    }

    public function edit(Jogo $jogo)
    {
        $categorias = Categoria::all();
        $produtoras = Produtora::all();
        $dlcs = Dlc::all();

        return view('jogo.edit', ['jogo' => $jogo, 'categorias' => $categorias, 'produtoras' => $produtoras, 'dlcs' => $dlcs]);
    }

    public function update(Request $request, Jogo $jogo)
    {
        $jogo->categoria_id = $request->all()['categoria_id'];
        $jogo->produtora_id = $request->all()['produtora_id'];
        $jogo->dlc_id = $request->all()['dlc_id'];

        $jogo->update($request->all());
        return redirect('jogo');
    }

    public function destroy(Jogo $jogo)
    {
        //
    }
}
