<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exibindo dados</title>
</head>
<body>
    <h1>Metodo Show</h1>
    <a href="{{ route('user.index') }}">Voltar</a>

    <hr>
    <h2>{{ $dados->assunto }}</h2>
    <tr>
        <label for="status">Status:</label>
        <td>{{ $dados->status }}</td>
        <br>
        <label for="assunto">Assunto:</label>
        <td>{{ $dados->assunto }}</td>
        <br>
        <label for="descricao">Descrição:</label>
        <td>{{ $dados->descricao }}</td>
    </tr>
</body>
</html>