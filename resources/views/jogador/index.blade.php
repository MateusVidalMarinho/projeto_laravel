@extends('master')
@section('titulo','Jogadores')
@section('conteudo')
<h3>Jogadores</h3>
<a class="btn btn-success mb-3" href="/jogador/create">Novo Jogador</a>
<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jogadores as $a)
        <tr>
            <td>{{$a->nome}}</td>
            <td>{{$a->email}}</td>
            <td><a class="btn btn-warning" href="jogador/{{$a->id}}/edit">Editar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
