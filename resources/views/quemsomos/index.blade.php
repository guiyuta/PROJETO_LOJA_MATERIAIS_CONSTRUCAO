@extends('layout_admin.main')

@section('title', 'Quem Somos')

@section('content')
    <table class="table">
        <thead>
            <tr>
            <div>
                <a href='/admin/quemsomos/novo_quemsomos' class='btn btn-success'>
                    Novo
                </a>
            </div>
                <th > Id </th>
                <th scope="col" class="w-25"> Texto </th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td>" .$linha['id'] . "</td>" .
                            "<td class='text-break w-100'>" .$linha['texto'] . "</td>" .
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