@extends('layout_admin.main')

@section('title', 'Cadastro de produto')

@section('content')

<div class="card-body">
    <h5 class="card-title">Cadastro de um novo produto</h5>
    <form action="/admin/produto/salvar_novo" method="post">
        @csrf
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Nome do produto</label>
        <input type="text" class="form-control" placeholder="Digite o nome" name="nome">
    </div>
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Nome da marca</label>
        <input type="text" class="form-control" placeholder="Digite a marca" name="marca">
    </div>
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Preço do produto</label>
        <input type="text" class="form-control" placeholder="Digite o preço" name="preco">
    </div>
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Estoque do produto</label>
        <input type="text" class="form-control" placeholder="Digite o estoque" name="estoque">
    </div>
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Descrição do produto</label>
        <input type="text" class="form-control" placeholder="Digite a descrição" name="descricao">
    </div>  
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Imagem do produto</label>
        <input type="text" class="form-control" placeholder="Insira o link da imagem" name="imagem1">
    </div>
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Imagem do produto</label>
        <input type="text" class="form-control" placeholder="Insira o link da imagem" name="imagem2">
    </div>
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Imagem do produto</label>
        <input type="text" class="form-control" placeholder="Insira o link da imagem" name="imagem3">
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href='/admin/produto' class='btn btn-default'>Voltar</a>
    </div>
    </form>
</div>
@endsection