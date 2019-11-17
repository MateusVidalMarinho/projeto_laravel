@extends('master')
@section('titulo','Editar Produtora')
@section('conteudo')
<form method="post" action="/jogador/{{$jogador->id}}">
    @csrf
    @method("put")
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{$jogador->nome}}" required autofocus>
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <textarea name="email" id="email" class="form-control" required>{{$jogador->email}}</textarea>
    </div>
    <button class="btn btn-secondary" type="reset">Limpar</button>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>
@endsection
