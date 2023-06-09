@extends('layout_admin.main')

@section('title', 'Comentarios')

@section('content')

    <div class="pagetitle">
      <h1>Comentarios</h1>
    </div><!-- End Page Title -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col" style='text-align: center;'>Nome</th>
                <th scope="col" style='text-align: center;'>Nota</th>
                <th scope="col" class="w-50" style='text-align: center;'>Mensagem</th>
                <th scope="col" style='text-align: center;'></th>

            </tr>
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td style='text-align: center;'>"  .$linha['nome'] . "</td>" .
                            "<td style='text-align: center;'>" .$linha['nota'] . "</td>" .
                            "<td class='text-break w-25' style='text-align: center;'>" .$linha['mensagem'] . "</td>" .
                            "<td>
                                <a href='/admin/comentario/excluir/" . $linha['id']."' class='btn btn-danger'>
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