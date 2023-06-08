<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all()->toArray();
        
        return view('users.index', 
                    [ 'lista' => $users ]
                    );
    }

    public function excluir($id) 
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/admin/users');
    }

    public function pesquisa(Request $request) 
    {
        $valor = $request->input("valor");

        $users = User::query()
                    ->where('email', 'LIKE', "%{$valor}%")
                    ->get();

                    return view('users.index', 
                    [ 'lista' => $users ]
                    );
    }
}
