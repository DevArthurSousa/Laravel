<?php

namespace App\Http\Controllers;

use App\Models\Categoria; // Importa o Model Categoria
use Illuminate\Http\Request; // Importa o Request

class CategoriaController extends Controller
{
    /**
     * Exibe formulário e lista de categorias.
     * (Conforme GET /categorias no PDF )
     */
    public function index()
    {
        $categorias = Categoria::all();
        // Vamos criar essa view no próximo passo
            // ...
        return view('categorias.index', ['categorias' => $categorias]); // <-- CORRIGIDO
    }
    

    /**
     * Salva uma nova categoria no banco.
     * (Conforme POST /categorias no PDF [cite: 1475])
     */
    public function store(Request $request)
    {
        // Validação
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        // Criação
        Categoria::create($request->all());

        // Redirecionamento com mensagem
// O CÓDIGO CORRETO:
return redirect()->route('categorias.index')->with('sucesso', 'Categoria cadastrada com sucesso!');
    }
}