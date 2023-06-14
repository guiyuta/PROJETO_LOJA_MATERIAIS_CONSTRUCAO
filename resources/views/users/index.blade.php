@extends('layout_admin.main')

@section('title', 'Usuários')

@section('content')
    <div class="pagetitle">
      <h1>Usuários Registrados</h1>
    </div><!-- End Page Title -->
  
    <table class="table">
        <thead>
            <tr>
                <th scope="col" style='text-align: center;'>Nome</th>
                <th scope="col" class="w-50" style='text-align: center;'>E-mail</th>
                <th scope="col" style='text-align: center;'></th>

            </tr>
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td style='text-align: center;'>"  .$linha['name'] . "</td>" .
                            "<td class='text-break w-25' style='text-align: center;'>" .$linha['email'] . "</td>" .
                            "<td>
                                <a href='/admin/users/excluir/" . $linha['id']."' class='btn btn-danger'>
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