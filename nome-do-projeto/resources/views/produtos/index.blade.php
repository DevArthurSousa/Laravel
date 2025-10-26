<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('produtos.criar')}}">Novo produto</a>
    <ul>
        @foreach($produtos as $produto)
        <li>
            {{ $item->nome }} || R@ {{number_format($item->preco,2,',','.')}} <br>
            {{ $item->descricao }}
        </li>
    @endforeach
    </ul>
</body>
</html>