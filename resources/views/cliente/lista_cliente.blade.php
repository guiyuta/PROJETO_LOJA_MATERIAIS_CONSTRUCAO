@extends('layout_loja.main')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets_loja/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Clientes</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Clientes</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

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
                            "<td class='text-break w-25' style='text-align: center;'> <img src='" .$linha['imagem'] . "'></td>" .
                            "<td style='text-align: center;'>" .$linha['nome'] . "</td>" .
                            "<td class=' w-25' style='text-align: center;'>" .$linha['telefone'] . "</td>" .
                            "<td style='text-align: center;'>" .$linha['email'] . "</td>" .
                        "</tr>";
                }
            ?>
        </tbody>
    </table>
@endsection