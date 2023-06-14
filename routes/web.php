<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\QuemsomosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/layout_loja/home');
});



Route::group(['middleware'=>"auth"], function() {
    Route::group(['prefix' => 'admin'], function() {
        Route::get('/', [ContatoController::class, 'index']);
    
        Route::group(['prefix' => 'cliente'], function() {
            Route::get('/', [ClienteController::class, 'index']);
            Route::get('/novo_cliente',
                        [ClienteController::class, 'novo_cliente']
                        );
            Route::post('salvar_novo',
                        [ClienteController::class, 'salvar_novo']
                        );
            Route::get('/excluir/{id}',
                        [ClienteController::class, 'excluir']  
                        );
            Route::get('/editar/{id}',
                        [ClienteController::class, 'editar']  
                        );
            Route::post('salvar_alteracao',
                        [ClienteController::class, 'salvar_alteracao']
                        );
            Route::get('/pesquisa',
                        [ClienteController::class, 'pesquisa']
                        );
        });
    
    
        Route::group(['prefix' => 'quemsomos'], function() {
            Route::get('/', [QuemsomosController::class, 'index']);
            Route::get('/novo_quemsomos',
                        [QuemsomosController::class, 'novo_quemsomos']
                        );
            Route::post('salvar_novo',
                        [QuemsomosController::class, 'salvar_novo']
                        );
            Route::get('/excluir/{id}',
                        [QuemsomosController::class, 'excluir']  
                        );
            Route::get('/editar/{id}',
                        [QuemsomosController::class, 'editar']  
                        );
            Route::post('salvar_alteracao',
                        [QuemsomosController::class, 'salvar_alteracao']
                        );
        });
    
    
        Route::group(['prefix' => 'contato'], function() {
            Route::get('/', [ContatoController::class, 'index']);
            Route::get('/excluir/{id}',
                        [ContatoController::class, 'excluir']  
                        );
            Route::post('salvar_novo',
                        [ContatoController::class, 'salvar_novo']
                        );
            Route::get('/pesquisa',
                        [ContatoController::class, 'pesquisa']
                        );
        });


        Route::group(['prefix' => 'comentario'], function() {
            Route::get('/', [ComentarioController::class, 'index']
        );
            Route::get('/excluir/{id}',
                            [ComentarioController::class, 'excluir']  
        );
    });

        Route::group(['prefix' => 'produto'], function() {
            Route::get('/', [ProdutoController::class, 'index']);
            Route::get('/novo_produto',
                        [ProdutoController::class, 'novo_produto']
                        );
            Route::post('salvar_novo',
                        [ProdutoController::class, 'salvar_novo']
                        );
            Route::get('/excluir/{id}',
                        [ProdutoController::class, 'excluir']  
                        );
            Route::get('/editar/{id}',
                        [ProdutoController::class, 'editar']  
                        );
            Route::post('salvar_alteracao',
                        [ProdutoController::class, 'salvar_alteracao']
                        );
            Route::get('/pesquisa',
                        [ProdutoController::class, 'pesquisa']
                        );            
        });

        Route::group(['prefix' => 'users'], function() {
            Route::get('/', [UserController::class, 'index']);
            Route::get('/excluir/{id}',
                        [UserController::class, 'excluir']  
                        );
            
        });
    });

});











Route::group(['prefix' => 'loja'], function(){
    Route::get('/', function () {
        return view('/layout_loja/home');
    });
    Route::get('/cliente',
                    [ClienteController::class, 'lista']
    );
    Route::get('quemsomos', [QuemsomosController::class, 'texto']);
    
    Route::group(['prefix' => 'comentario'], function() {
        Route::get('/', [ComentarioController::class, 'recebe']);
        Route::get('/novo_comentario',
                        [ComentarioController::class, 'novo_comentario']
                        );
        Route::post('salvar_novo',
                    [ComentarioController::class, 'salvar_novo']
                    );
    });
    
    Route::group(['prefix' => 'produto'], function(){
        Route::get('/',
                    [ProdutoController::class, 'lista']
    );
        Route::get('/detalhe/{id}',
                    [ProdutoController::class, 'detalhe']
    );
        Route::post('/adicionar_ao_carrinho',
                    [ProdutoController::class, 'adicionarAoCarrinho']
    );
    });
    
    
    Route::group(['prefix' => 'contato'], function() {
        Route::get('/', [ContatoController::class, 'novo_contato']);
        Route::post('salvar_novo',
                    [ContatoController::class, 'salvar_novo']
                    );
    });
    
    Route::get('login', function () {
        return view('/auth/login');
    }); 
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
