<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/table.css") }}">

    <title>Exibindo dados</title>
</head>
<body>
    <h1>Metodo Show</h1>
    <a class="btn" href="{{ route('user.index') }}">Voltar</a>

    <hr>
    <h2>{{ $dados->assunto }}</h2>
    <tr>
        <legend for="status">Status:</legend>
        <td><strong>{{ $dados->status }}</strong></td>
        <legend for="assunto">Assunto:</legend>
        <td><strong>{{ $dados->assunto }}</strong></td>
        <legend for="descricao">Descrição:</legend>
        <td><strong>{{ $dados->descricao }}</strong></td>
        {{-- metodo delete, precisa do csrf(token de validação de formularios) e metodo http ('delete')--}}
        <form action="{{ route('user.delete', $dados->id) }}" method="POST">
        @csrf()
        @method('DELETE')
        <button type="submit">Deletar</button>
    </tr>
</form>
</body>
</html>