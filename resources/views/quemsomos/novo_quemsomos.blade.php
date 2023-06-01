@extends('layout_admin.main')

@section('title', 'Cadastro de um novo texto')

@section('content')

<div class="card-body">
    <h5 class="card-title">Cadastro de um novo texto</h5>
    <form action="/admin/quemsomos/salvar_novo" method="post">
        @csrf
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Texto</label>
        <input type="text" class="form-control" placeholder="Digite o texto" name="texto">
    </div>
   
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href='/quemsomos' class='btn btn-default'>Voltar</a>
    </div>
    </form>
</div>
@endsection