@extends('master')
@section('titulo','Categorias')
@section('conteudo')
<h3>Categorias</h3>
<a class="btn btn-success mb-3" href="/categoria/create">Novo Categoria</a>
<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categorias as $a)
        <tr>
            <td>{{$a->nome}}</td>
            <td>{{$a->descricao}}</td>
            <td><a class="btn btn-warning" href="categoria/{{$a->id}}/edit">Editar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
