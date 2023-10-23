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
        <li><a href="/">Voltar</a></li>
        <li><a href="{{ route('contatos.create.form') }}">Criar contatos</a></li>
    </ul>

    <hr>
    @if($dados)
    <ol>
        {{-- dd{{ $dados }}; --}}
        @foreach ($dados as $dado)
            <li>Numero.:  {{ $dado['contato'] }} <a href="{{ route('contatos.edit', $dado->id) }}">alterar</a> / <a href="{{ route('contatos.delete.form', $dado->id) }}">excluir</a></li>
        @endforeach
    </ol>
    @endif
</body>
</html>