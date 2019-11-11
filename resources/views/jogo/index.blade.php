@extends('master')
@section('titulo','Jogos')
@section('conteudo')
<h3>Jogos</h3>
<a class="btn btn-success mb-3" href="/jogo/create">Novo Jogo</a>
<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Produtora</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jogos as $a)
        <tr>
            <td>{{$a->nome}}</td>
            <td>{{$a->descricao}}</td>
            <td>{{$a->categoria->nome}}</td>
            <td>{{$a->produtora->nome}}</td>
            <td><a class="btn btn-warning" href="jogo/{{$a->id}}/edit">Editar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
