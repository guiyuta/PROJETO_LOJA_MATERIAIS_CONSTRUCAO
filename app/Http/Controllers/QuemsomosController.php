<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quemsomos;

class QuemsomosController extends Controller
{
    public function index(){
        $quemsomos = Quemsomos::all()->toArray();
        
        return view('quemsomos.index', 
                    [ 'lista' => $quemsomos ]
                    );
    }

    public function texto(){
        $quemsomos = Quemsomos::first();

        return view('layout_loja.quemsomos', ['texto' => $quemsomos]);
    }

    public function novo_quemsomos() 
    {
        return view('quemsomos.novo_quemsomos');
    }

    public function salvar_novo(Request $dados) 
    {
        $quemsomos = new Quemsomos;
        $quemsomos->texto = $dados->input("texto");
        $quemsomos->save();

        return redirect('/admin/quemsomos');
        //return redirect()->route('cliente.index');
    }

    public function excluir($id) 
    {
        $quemsomos = Quemsomos::find($id);
        $quemsomos->delete();
        return redirect('/admin/quemsomos');
    }

    public function editar($id) 
    {
        $quemsomos = Quemsomos::find($id)->toArray();
        return view('quemsomos.editar',
                    [ 'quemsomos' => $quemsomos ]
                   );
    }

    public function salvar_alteracao(Request $request) 
    {
        $id = $request->input("id");

        $quemsomos = Quemsomos::find($id);
        $quemsomos->texto = $request->input('texto');
        $quemsomos->save();

        return redirect('/admin/quemsomos');
    }

    public function pesquisa(Request $request) 
    {
        $valor = $request->input("valor");

        $quemsomos = Quemsomos::query()
                    ->where('texto', 'LIKE', "%{$valor}%")
                    ->get();

                    return view('quemsomos.index', 
                    [ 'lista' => $quemsomos ]
                    );
    }
}

