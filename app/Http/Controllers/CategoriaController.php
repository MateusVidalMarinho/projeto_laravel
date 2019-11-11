<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function __construct(Request $request) {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $categorias = Categoria::all();
        return view('categoria.index')->with('categorias',$categorias);
    }

    public function create()
    {
        return view ('categoria.create');
    }

    public function store(Request $request)
    {
        Categoria::create($request->all());
        return redirect('categoria');
    }

    public function show(Categoria $categoria)
    {
        //
    }

    public function edit(Categoria $categoria)
    {
        return view('categoria.edit')->with('categoria',$categoria);
    }

    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return redirect('categoria');
    }

    public function destroy(Categoria $categoria)
    {
        //
    }
}
