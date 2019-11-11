@extends('master')
@section('titulo','Novo Jogo')
@section('conteudo')
<form method="post" action="/jogo">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="categoria_id">Categoria</label>
        <select name="categoria_id" id="categoria_id" class="form-control">
            @foreach($categorias as $a)
            <option value="{{ $a->id }}">{{$a->nome}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="produtora_id">Produtora</label>
        <select name="produtora_id" id="produtora_id" class="form-control">
            @foreach($produtoras as $a)
            <option value="{{ $a->id }}">{{$a->nome}}</option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-secondary" type="reset">Limpar</button>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>
@endsection
