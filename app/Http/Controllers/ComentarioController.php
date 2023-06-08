<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class ComentarioController extends Controller
{
    public function index() 
    {
        $comentarios = Comentario::all()->toArray();
        
        return view('comentario.index', 
                    [ 'lista' => $comentarios ]
                    );
    }

    public function recebe() 
    {
        $comentarios = Comentario::all()->toArray();
        
        return view('comentario.recebe_comentario', 
                    [ 'lista' => $comentarios ]
                    );
    }

    public function novo_comentario() 
    {
        return view('comentario.novo_comentario');
    }

    public function salvar_novo(Request $dados) 
    {
        $dados->validate([
            'nome' => 'required',
            'nota' => 'required|numeric|min:1|max:5',
            'mensagem' => 'required'
        ]);
    
        // Resto da lógica para salvar o comentário no banco de dados
    
        
        
        $comentario = new Comentario;
        $comentario->nome = $dados->input("nome");
        $comentario->nota = $dados->input("nota");
        $comentario->mensagem = $dados->input("mensagem");
        $comentario->save();

        return redirect('/loja/comentario');
    }

    public function excluir($id) 
    {
        $comentario = Comentario::find($id);
        $comentario->delete();
        return redirect('/admin/comentario');
    }

}
