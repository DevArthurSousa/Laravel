<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteControler;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste',[TesteControler::class,'index']);

Route::get('/testeData',[TesteControler::class,'retornaData']);