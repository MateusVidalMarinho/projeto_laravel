@extends('master')
@section('titulo','Editar Categoria')
@section('conteudo')
<form method="post" action="/categoria/{{$categoria->id}}">
    @csrf
    @method("put")
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{$categoria->nome}}">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" class="form-control">{{$categoria->descricao}}</textarea>
    </div>
    <button class="btn btn-secondary" type="reset">Limpar</button>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>
@endsection
