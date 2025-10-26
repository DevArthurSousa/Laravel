<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(&errors->any())
    <u>
        @foreach ($errors->all() as $erro)
        <li>{{error}}</li>
        @endforeach
    </u>
    @endif

    <form action="{{ localhost:8000/produtos.salvar }}" method="POST" >
        @csrf   //VAI CAIR MESSSSSSSSSSMO
        <label for="">Nome:</label> <br><br>
        <input type="text" name ="nome" value="{{old('nome')}}" >

        <label for="">Preco</label> <br><br>
        <input type="text">

        <label for="">Descricao</label> <br><br>
        <input type="text">


    </form>
    <a href="{{  }}"></a>


</body>
</html>
//csrf VAI CAIR NA PROVA 