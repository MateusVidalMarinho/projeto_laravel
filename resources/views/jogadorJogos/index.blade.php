@extends('master')
@section('titulo','Jogador Jogo')
@section('conteudo')
<h3>Jogador Jogo</h3>
<a class="btn btn-success mb-3" href="/jogador-jogos/create">Novo JogadorJogo</a>
<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jogadorJogos as $a)
        <tr>
            <td>{{$a->nome}}</td>
            <td>{{$a->descricao}}</td>
            <td><a class="btn btn-warning" href="jogador-jogos/{{$a->id}}/edit">Editar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
