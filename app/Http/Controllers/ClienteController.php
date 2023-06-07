<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    
    public function index() 
    {
        $clientes = Cliente::all()->toArray();
        
        return view('cliente.index', 
                    [ 'lista' => $clientes ]
                    );
    }

    public function lista() 
    {
        $clientes = Cliente::all()->toArray();
        
        return view('cliente.lista_cliente', 
                    [ 'lista' => $clientes ]
                    );
    }

    public function novo_cliente() 
    {
        return view('cliente.novo_cliente');
    }
    
    public function salvar_novo(Request $dados) 
    {
        $cliente = new Cliente;
        $cliente->nome = $dados->input("nome");
        $cliente->imagem = $dados->input("imagem");
        $cliente->telefone = $dados->input("telefone");
        $cliente->email = $dados->input("email");
        $cliente->save();

        return redirect('/admin');
        //return redirect()->route('cliente.index');
    }

    public function excluir($id) 
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/admin/cliente');
    }

    public function editar($id) 
    {
        $cliente = Cliente::find($id)->toArray();
        return view('cliente.editar',
                    [ 'cliente' => $cliente ]
                   );
    }

    public function salvar_alteracao(Request $request) 
    {
        $id = $request->input("id");

        $cliente = Cliente::find($id);
        $cliente->nome          = $request->input('nome');
        $cliente->imagem          = $request->input('imagem');
        $cliente->telefone	          = $request->input('telefone');
        $cliente->email          = $request->input('email');
        $cliente->save();

        return redirect('/admin/cliente');
    }

}
