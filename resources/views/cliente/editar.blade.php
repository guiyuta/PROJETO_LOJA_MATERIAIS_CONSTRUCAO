@extends('layout_admin.main')

@section('title', 'Alteração de cliente')

@section('content')

<div class="card-body">
    <h5 class="card-title">Alterar um cliente</h5>
    <form action="/admin/cliente/salvar_alteracao" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $cliente['id'] }}" />
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Nome do cliente</label>
        <input type="text" class="form-control" placeholder="Digite o nome" name="nome" value='{{ $cliente["nome"] }}'>
    </div>
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Imagem do cliente</label>
        <input type="text" class="form-control" placeholder="Digite o link da imagem" name="imagem" value='{{ $cliente["imagem"] }}'>
    </div>
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Telefone do cliente</label>
        <input type="text" class="form-control" placeholder="Digite o telefone" name="telefone" value='{{ $cliente["telefone"] }}'>
    </div>
    <div class="col-12">
        <label for="inputNanme4" class="form-label">E-mail do cliente</label>
        <input type="text" class="form-control" placeholder="Digite o email" name="email" value='{{ $cliente["email"] }}'>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href='/admin/cliente' class='btn btn-default'>Voltar</a>
    </div>
    </form><!-- Vertical Form -->
</div>
@endsection