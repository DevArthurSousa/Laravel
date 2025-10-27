<?php

use Illuminate\Support\Facades\Route;
// 1. Importar o Controller de Produto
use App\Http\Controllers\ProdutoControler;
// (Vamos importar o de Categoria em breve)
use App\Http\Controllers\CategoriaController;


/*
| Rota Padrão (Vem com o Laravel)
*/
Route::get('/', function () {
    return view('welcome');
});


/*
| Rotas de Produtos (Conforme PDF [cite: 1451, 1457])
*/

// 2. Rota GET /produtos [cite: 1451]
// Quando o usuário acessar /produtos (GET), chama o método index()
// Demos um nome 'produtos.index' para essa rota.
Route::get('/produtos', [ProdutoControler::class, 'index'])->name('produtos.index');

// 3. Rota POST /produtos 
// Quando o formulário for enviado para /produtos (POST), chama o método store()
// Demos um nome 'produtos.store' (usado no 'action' do formulário).
Route::post('/produtos', [ProdutoControler::class, 'store'])->name('produtos.store');


/*
| Rotas de Categorias (Conforme PDF )
| (Vamos criar os arquivos para estas rotas no próximo passo)
*/

// 4. Rota GET /categorias [cite: 1464]
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');

// 5. Rota POST /categorias [cite: 1470]
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');