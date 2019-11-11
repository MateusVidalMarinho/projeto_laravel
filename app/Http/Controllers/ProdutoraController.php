<?php

namespace App\Http\Controllers;

use App\Produtora;
use Illuminate\Http\Request;

class ProdutoraController extends Controller
{

    public function index()
    {
        $produtoras = Produtora::all();
        return view('produtora.index')->with('produtoras',$produtoras);
    }

    public function create()
    {
        return view ('produtora.create');
    }

    public function store(Request $request)
    {
        Produtora::create($request->all());
        return redirect('produtora');
    }

    public function show(Produtora $produtora)
    {
        //
    }

    public function edit(Produtora $produtora)
    {
        return view('produtora.edit')->with('produtora',$produtora);
    }

    public function update(Request $request, Produtora $produtora)
    {
        $produtora->update($request->all());
        return redirect('produtora');
    }

    public function destroy(Produtora $produtora)
    {
        //
    }
}
