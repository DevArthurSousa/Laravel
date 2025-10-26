<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
class ProdutoControler extends Controller
{
    

    public function index(){
        $produtos = produto::all();
        return view('produtos.index').compact('produtos');
    }



    public function salva(Request $request){
        $request -> validate([
            'nome' =>'required|max:255',
            'preco' => 'required|numeric'


        ]); //alguma coisa de valid tada location ou algo assim vai cair na prova  
    
        Produto::create($request->all());
        return redirect() -> ('produtos.index');

    }
    public function criar(){
        return view('produto.criar')
    }
}
