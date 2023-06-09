@extends('layout_admin.main')

@section('title', 'Clientes')

@section('content')

    <div class="pagetitle">
      <h1>Clientes</h1>
    </div><!-- End Page Title -->
    <div>
        <a href='/admin/cliente/novo_cliente' class='btn btn-success'>
            Novo
        </a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="w-50" style='text-align: center;'>Link da Imagem</th>
                <th scope="col" style='text-align: center;'>Nome</th>
                <th scope="col" style='text-align: center;'>Telefone</th>
                <th scope="col" style='text-align: center;'>E-mail</th>
                <th scope="col" style='text-align: center;'></th>

            </tr>
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td class='text-break w-25' style='text-align: center;'> <img src='" .$linha['imagem'] . "'width= '300px' height=  '200px'></td>" .
                            "<td style='text-align: center;'>" .$linha['nome'] . "</td>" .
                            "<td class=' w-25' style='text-align: center;'>" .$linha['telefone'] . "</td>" .
                            "<td style='text-align: center;'>" .$linha['email'] . "</td>" .
                            "<td>
                                <a href='/admin/cliente/editar/" . $linha['id']."' class='btn btn-secondary'>
                                    <i class='fas fa-edit'></i>
                                    <span>Editar</span>
                                </span>

                                <a href='/admin/cliente/excluir/" . $linha['id']."' class='btn btn-danger'>
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