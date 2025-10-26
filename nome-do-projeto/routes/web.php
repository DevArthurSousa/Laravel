<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteControler;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste',[TesteControler::class,'index']);

Route::get('/testeData',[TesteControler::class,'retornaData']);

Route::get('/produtos', [ProdutosControler::class,'index'])->name('produtos.index');
Route::get('/produtos/criar',[ProdutosControler::class,'criar'])->name('produtos.criar');
Route::get('/testeData',[TesteControler::class,'retornaData']);


