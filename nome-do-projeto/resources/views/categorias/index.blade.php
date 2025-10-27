<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Produtos</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        .form, .lista { border: 1px solid #ccc; padding: 20px; margin-bottom: 20px; }
        .form div { margin-bottom: 10px; }
        .form label { display: block; }
        .form input, .form textarea { width: 100%; padding: 8px; box-sizing: border-box; }
        .alert { padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; }
        .alert-success { color: #155724; background-color: #d4edda; border-color: #c3e6cb; }
        .alert-danger { color: #721c24; background-color: #f8d7da; border-color: #f5c6cb; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h1>Gerenciar Produtos</h1>

    @if(session('sucesso'))
        <div class="alert alert-success">
            {{ session('sucesso') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Opa!</strong> Algo deu errado:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form">
        <h2>Cadastrar Novo Produto</h2>
        
       {{-- Em resources/views/categorias/index.blade.php --}}
<form action="{{ route('categorias.store') }}" method="POST">
     @csrf
     {{-- Campos do formulário de categoria --}}
     <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome') }}">
    </div>
    <div>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao">{{ old('descricao') }}</textarea>
    </div>
    <button type="submit">Salvar Categoria</button> {{-- Texto do botão atualizado --}}
</form>
    </div>


    <div class="lista">
        <h2>Produtos Cadastrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
               @forelse ($categorias as $categoria)
    <tr>
        <td>{{ $categoria->id }}</td>
        <td>{{ $categoria->nome }}</td>
        <td>{{ $categoria->descricao }}</td>
    </tr>
@empty
    <tr>
        <td colspan="3">Nenhuma categoria cadastrada.</td>
    </tr>
@endforelse
            </tbody>
        </table>
    </div>

</body>
</html>