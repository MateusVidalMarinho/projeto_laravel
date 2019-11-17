@extends('master')
@section('titulo','Novo Jogador')
@section('conteudo')
<form method="post" action="/jogador">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" required autofocus>
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" class="form-control" required>
    </div>
    <button class="btn btn-secondary" type="reset">Limpar</button>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>
@endsection
