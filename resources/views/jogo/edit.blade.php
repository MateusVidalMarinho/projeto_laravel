@extends('master')
@section('titulo','Editar Jogo')
@section('conteudo')
<form method="post" action="/jogo/{{$jogo->id}}">
    @csrf
    @method("put")
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{$jogo->nome}}" required autofocus>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" class="form-control" required>{{$jogo->descricao}}</textarea>
    </div>
    <div class="form-group">
        <label for="categoria_id">Categoria</label>
        <select name="categoria_id" id="categoria_id" required>
            @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}" <?php echo ($jogo->categoria_id) ? 'selected' : '' ?>>{{$categoria->nome}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="produtora_id">Produtora</label>
        <select name="produtora_id" id="produtora_id" required>
            @foreach($produtoras as $produtora)
            <option value="{{ $produtora->id }}" <?php echo ($jogo->produtora_id) ? 'selected' : '' ?>>{{$produtora->nome}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="dlc_id">Dlc</label>
        <select name="dlc_id" id="dlc_id" required>
            @foreach($dlcs as $dlc)
            <option value="{{ $dlc->id }}" <?php echo ($jogo->dlc_id) ? 'selected' : '' ?>>{{$dlc->nome}}</option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-secondary" type="reset">Limpar</button>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>
@endsection
