<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style.css">
    <title>Index</title>
</head>
<body>
    <h2>PÁGINA DE CLIENTES</h2>
    <ul>
        @foreach ($clientes as $cliente)
        <li>

            <span>Nome do cliente: <b>{{$cliente->nome}}</b></span>
        </li>
        @endforeach
    </ul>
</body>
</html>

