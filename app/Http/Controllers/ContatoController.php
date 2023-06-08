<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index(){
        $contato = Contato::all()->toArray();
        
        return view('contato.index', 
                    [ 'lista' => $contato ]
                    );
    }

    public function novo_contato() 
    {
        return view('contato.novo_contato');
    }

    public function salvar_novo(Request $dados) 
    {
        $contato = new Contato;
        $contato->email     = $dados->input("email");
        $contato->telefone  = $dados->input("telefone");
        $contato->mensagem  = $dados->input("mensagem");
        $contato->save();

        return redirect('/loja/contato');
        
    }

    public function excluir($id) 
    {
        $contato = Contato::find($id);
        $contato->delete();
        return redirect('/admin/contato');
    }

    public function pesquisa(Request $request) 
    {
        $valor = $request->input("valor");

        $contato = Contato::query()
                    ->where('email', 'LIKE', "%{$valor}%")
                    ->get();

                    return view('contato.index', 
                    [ 'lista' => $contato ]
                    );
    }
}
