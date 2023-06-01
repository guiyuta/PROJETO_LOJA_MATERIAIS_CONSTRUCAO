@extends('layout_admin.main')

@section('title', 'Cadastro de cliente')

@section('content')

<div class="card-body">
    <h5 class="card-title">Cadastro de um novo cliente</h5>
    <form action="/admin/cliente/salvar_novo" method="post">
        @csrf
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Nome do cliente</label>
        <input type="text" class="form-control" placeholder="Digite o nome" name="nome">
    </div>
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Imagem do cliente</label>
        <input type="text" class="form-control" placeholder="Digite o link da imagem" name="imagem">
    </div>
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Telefone do cliente</label>
        <input type="text" class="form-control" placeholder="Digite o telefone" name="telefone">
    </div>
    <div class="col-12">
        <label for="inputNanme4" class="form-label">E-mail do cliente</label>
        <input type="text" class="form-control" placeholder="Digite o email" name="email">
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href='/admin/cliente' class='btn btn-default'>Voltar</a>
    </div>
    </form>
</div>
@endsection