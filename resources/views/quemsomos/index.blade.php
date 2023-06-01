@extends('layout_admin.main')

@section('title', 'Quem Somos')

@section('content')
    <div class="form-group">
        <form method='get' action='/admin/quemsomos/pesquisa'>
        <input type="text"
                class="form-control"
                placeholder="Pesquisar"
                name="valor"/>
        <input type="submit" class="btn btn-warning">
        <form>
    </div>
    <div>
        <a href='/admin/quemsomos/novo_quemsomos' class='btn btn-success'>
            Novo
        </a>
    </div>
    <table class="table table-hover text-nowrap">
        <thead>
            <td>Id</td>
            <td>Texto</td>
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td>" .$linha['id'] . "</td>" .
                            "<td>" .$linha['texto'] . "</td>" .
                            "<td>
                                <a href='/admin/quemsomos/editar/" . $linha['id']."' class='btn btn-default'>
                                    <i class='fas fa-edit'></i>
                                    <span>Editar</span>
                                </span>

                                <a href='/admin/quemsomos/excluir/" . $linha['id']."' class='btn btn-danger'>
                                <i class='fas fa-trash'></i>
                                    <span>Excluir</span>
                                </span>
                            </td>" .
                        "</tr>";
                }
            ?>
        </tbody>
    </table>
@endsection