<?php

namespace App\Http\Controllers;

use App\Jogador;
use Illuminate\Http\Request;

class JogadorController extends Controller
{
    public function __construct(Request $request) {
        $this->middleware('auth', ['except' => ['index']]);
    }
    
    public function index()
    {
        $jogadores = Jogador::all();
        return view('jogador.index')->with('jogadores', $jogadores);
    }

    public function create()
    {
        return view ('jogador.create');
    }

    public function store(Request $request)
    {
        Jogador::create($request->all());
        return redirect('jogador');
    }

    public function show(Jogador $jogador)
    {
        //
    }

    public function edit(Jogador $jogador)
    {
        return view('jogador.edit')->with('jogador',$jogador);
    }

    public function update(Request $request, Jogador $jogador)
    {
        $jogador->update($request->all());
        return redirect('jogador');
    }

    public function destroy(Jogador $jogador)
    {
        //
    }
}
