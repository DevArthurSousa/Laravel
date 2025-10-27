<?php

namespace App\Http\Controllers;

use App\Models\Produto; // 1. Precisamos "importar" o Model para usá-lo
use Illuminate\Http\Request; // 2. Precisamos do Request para pegar os dados do formulário

class ProdutoController extends Controller
{
    /**
     * Método Index: Exibe o formulário e a lista de produtos.
     * (Conforme GET /produtos no PDF )
     */
    public function index()
    {
        // 3. Pega todos os produtos salvos no banco usando o Model
        $produtos = Produto::all();

        // ...
        // 4. Retorna a view e envia a variável $produtos para ela
        return view('produtos.index', ['produtos' => $produtos]); // <-- CORRIGIDO
    
    }

    /**
     * Método Store: Salva um novo produto no banco.
     * (Conforme POST /produtos no PDF )
     */
    public function store(Request $request)
    {
        // 5. Validação (como pedido no PDF )
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'descricao' => 'nullable|string',
        ]);

        // 6. Cria o novo produto no banco com os dados do formulário
        Produto::create([
            'nome' => $request->nome,
            'preco' => $request->preco,
            'descricao' => $request->descricao,
        ]);

        // 7. Redireciona o usuário de volta para a página anterior (o formulário)
        //    com uma mensagem de sucesso.
        // Código Novo e Corrigido
return redirect()->route('produtos.index')->with('sucesso', 'Produto cadastrado com sucesso!');
    }
}