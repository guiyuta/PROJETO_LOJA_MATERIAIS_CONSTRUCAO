<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\ItemPedido;

class ProdutoController extends Controller
{
    public function index() 
    {
        $produto = Produto::all()->toArray();
        
        return view('produto.index', 
                    [ 'lista' => $produto ]
                    );
    }

    public function lista() 
    {
        $produto = Produto::orderBy('created_at')->get();

        return view ('produto.lista_produto', ['produto'=>$produto]);
    }

    public function novo_produto() 
    {
        return view('produto.novo_produto');
    }

    public function detalhe($id){
        $data = Produto::find($id); 
        return view ('produto.detalhe', ['produto'=>$data]);
       
        
    }
    
    public function salvar_novo(Request $dados) 
    {
        $produto = new Produto;
        $produto->nome = $dados->input("nome");
        $produto->marca = $dados->input("marca");
        $produto->preco = $dados->input("preco");
        $produto->estoque = $dados->input("estoque");
        $produto->descricao = $dados->input("descricao");
        $produto->imagem1 = $dados->input("imagem1");
        $produto->imagem2 = $dados->input("imagem2");
        $produto->imagem3 = $dados->input("imagem3");
        $produto->save();

        return redirect('/admin');
        //return redirect()->route('cliente.index');
    }

    public function excluir($id) 
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect('/admin/produto');
    }

    public function editar($id) 
    {
        $produto = Produto::find($id)->toArray();
        return view('produto.editar',
                    [ 'produto' => $produto ]
                   );
    }

    public function salvar_alteracao(Request $request) 
    {
        $id = $request->input("id");

        $produto = Produto::find($id);
        $produto->nome  = $request->input('nome');
        $produto->marca = $request->input("marca");
        $produto->preco = $request->input("preco");
        $produto->estoque = $request->input("estoque");
        $produto->descricao = $request->input("descricao");
        $produto->imagem1 = $request->input("imagem1");
        $produto->imagem2 = $request->input("imagem2");
        $produto->imagem3 = $request->input("imagem3");
        $produto->save();

        return redirect('/admin/produto');
    }

    public function pesquisa(Request $request) 
    {
        $valor = $request->input("valor");

        $produto = Produto::query()
                    ->where('nome', 'LIKE', "%{$valor}%")
                    ->get();

                    return view('produto.index', 
                    [ 'lista' => $produto ]
                    );
    }

    public function adicionarAoCarrinho(Request $dados){
        $itens_pedido = new ItemPedido;
        $itens_pedido->id_produto=$dados->id_produto;
        $itens_pedido->id_pedido=1;
        $itens_pedido->quantidade=$dados->input("quantidade");
        $itens_pedido->save();
        return redirect('/loja/produto');
    }
}
