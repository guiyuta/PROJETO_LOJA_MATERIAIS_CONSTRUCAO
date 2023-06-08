@extends('layout_admin.main')

@section('title', 'Produtos')

@section('content')

    <div class="pagetitle">
      <h1>Produtos</h1>
    </div><!-- End Page Title -->
    <div>
        <a href='/admin/produto/novo_produto' class='btn btn-success'>
            Novo
        </a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" style='text-align: center;'>Nome</th>
                <th scope="col" style='text-align: center;'>Marca</th>
                <th scope="col" style='text-align: center;'>Preco</th>
                <th scope="col" style='text-align: center;'>Estoque</th>
                <th scope="col" style='text-align: center;'>Descrição</th>
                <th scope="col" class="w-25" style='text-align: center;'>Link da Imagem 1</th>
                <th scope="col" class="w-25" style='text-align: center;'>Link da Imagem 2</th>
                <th scope="col" class="w-25" style='text-align: center;'>Link da Imagem 3</th>
                <th scope="col" style='text-align: center;'></th>

            </tr>
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td style='text-align: center;'>" .$linha['nome'] . "</td>" .
                            "<td style='text-align: center;'>" .$linha['marca'] . "</td>" .
                            "<td style='text-align: center;'>" .$linha['preco'] . "</td>" .
                            "<td style='text-align: center;'>" .$linha['estoque'] . "</td>" .
                            "<td style='text-align: center;'>" .$linha['descricao'] . "</td>" .
                            "<td class='text-break w-25' style='text-align: center;'> <img src='" .$linha['imagem1'] . "'width='150' height='150'></td>" .
                            "<td class='text-break w-25' style='text-align: center;'> <img src='" .$linha['imagem2'] . "'width='150' height='150'></td>" .
                            "<td class='text-break w-25' style='text-align: center;'> <img src='" .$linha['imagem3'] . "'width='150' height='150'></td>" .
                            "<td>
                                <a href='/admin/produto/editar/" . $linha['id']."' class='btn btn-secondary'>
                                    <i class='fas fa-edit'></i>
                                    <span>Editar</span>
                                </span>

                                <a href='/admin/produto/excluir/" . $linha['id']."' class='btn btn-danger'>
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