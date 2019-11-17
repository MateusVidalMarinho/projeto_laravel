@extends('master')
@section('titulo','Nova Produtora')
@section('conteudo')
<form method="post" action="/produtora">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" required autofocus>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" class="form-control" required></textarea>
    </div>
    <button class="btn btn-secondary" type="reset">Limpar</button>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>
@endsection
