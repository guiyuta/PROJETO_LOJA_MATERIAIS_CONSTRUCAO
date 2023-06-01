@extends('layout_admin.main')

@section('title', 'Alteração do Quem Somos')

@section('content')

<div class="card-body">
    <h5 class="card-title">Alterar o texto</h5>
    <form action="/admin/quemsomos/salvar_alteracao" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $quemsomos['id'] }}" />
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Texto Quem Somos</label>
        <input type="text" class="form-control" placeholder="Digite o texto" name="texto" value='{{ $quemsomos["texto"] }}'>
    </div>
    
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href='/quemsomos' class='btn btn-default'>Voltar</a>
    </div>
    </form><!-- Vertical Form -->
</div>
@endsection