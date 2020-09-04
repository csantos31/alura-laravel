@extends('layout')
@section('cabecalho')
Adicionar série
@endsection

@section('conteudo')
<form method="post">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome">
    </div>
    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection
    