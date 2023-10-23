<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contatos</title>
</head>
<body>
    <h1>Aqui ficará os contatos</h1>
    <ul>
        <li><a href="{{ route('contatos.index') }}">Voltar</a></li>
    </ul>
    <h4>Dados a serem deletados</h4>
    {{-- {{ dd($deleteRequests) }} --}}
    <form action="{{ route('contatos.delete.process', $deleteRequests->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="text" value="{{ $deleteRequests->contato }}" readonly>
        <button type="submit">Deletar</button>
    </form>
</body>
</html>