@extends('master')
@section('titulo','Dlcs')
@section('conteudo')
<h3>Categorias</h3>
<a class="btn btn-success mb-3" href="/dlc/create">Novo Dlc</a>
<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dlcs as $a)
        <tr>
            <td>{{$a->nome}}</td>
            <td>{{$a->descricao}}</td>
            <td><a class="btn btn-warning" href="dlc/{{$a->id}}/edit">Editar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
