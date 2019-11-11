@extends('master')
@section('titulo','Produtoras')
@section('conteudo')
<h3>Produtoras</h3>
<a class="btn btn-success mb-3" href="/produtora/create">Novo Produtora</a>
<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtoras as $a)
        <tr>
            <td>{{$a->nome}}</td>
            <td>{{$a->descricao}}</td>
            <td><a class="btn btn-warning" href="produtora/{{$a->id}}/edit">Editar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
