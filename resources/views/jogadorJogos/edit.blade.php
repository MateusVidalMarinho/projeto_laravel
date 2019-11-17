@extends('master')
@section('titulo','Editar Produtora')
@section('conteudo')
<form method="post" action="/jogador-jogos">
    @csrf
    @method("put")
    <div class="form-group">
        <label for="jogador_id">Jogador</label>
        <select name="jogador_id" id="jogador_id" class="form-control">
            @foreach($jogadores as $a)
            <option value="{{ $a->id }}">{{$a->nome}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="jogo_id">Jogos</label>
        <select name="jogo_id" id="jogo_id" class="form-control">
            @foreach($jogos as $a)
            <option value="{{ $a->id }}">{{$a->nome}}</option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-secondary" type="reset">Limpar</button>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>
@endsection
