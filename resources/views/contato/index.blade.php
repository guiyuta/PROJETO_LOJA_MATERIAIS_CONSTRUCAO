@extends('layout_admin.main')

@section('title', 'Contato')

@section('content')
    <div class="pagetitle">
      <h1>Mensagens para Contato</h1>
    </div><!-- End Page Title -->
    <div class="form-group">
        <br>
        <form method='get' action='admin/contato/pesquisa' style='text-align: center;'>
        <br>
        <input type="text" class="form-control" placeholder="Pesquisar" name="valor"/>
        <br>
        <input type="submit" class="btn btn-warning">
        <br>
        <form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" style='text-align: center;'>E-mail</th>
                <th scope="col" style='text-align: center;'>Telefone</th>
                <th scope="col" class="w-50" style='text-align: center;'>Mensagem</th>
                <th scope="col" style='text-align: center;'></th>

            </tr>
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td style='text-align: center;'>"  .$linha['email'] . "</td>" .
                            "<td style='text-align: center;'>" .$linha['telefone'] . "</td>" .
                            "<td class='text-break w-25' style='text-align: center;'>" .$linha['mensagem'] . "</td>" .
                            "<td>
                                <a href='/admin/contato/excluir/" . $linha['id']."' class='btn btn-danger'>
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