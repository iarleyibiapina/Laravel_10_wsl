<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar dados</title>
</head>
<body>
    <h1>Editando o assunto {{ $dados->assunto }}</h1>
    <section>
        {{-- id que vai ser alterado --}}
        {{-- {{ dd($dados) }} --}}
        <form action="{{ route('user.update', $dados->id) }}" method="POST">
            @csrf()
            @method('PUT')
            {{-- <input type="text" value="{{ csrf_token() }}" hidden name="_token"> --}}
            {{-- outra forma de criar o token automatico --}}
            @csrf()
            <label for="assunto">Assunto: </label>
            {{-- name tem que ser a mesma da tabela do banco --}}
            <input type="text" name="assunto" value="{{ $dados->assunto }}">
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" value="{{ $dados->descricao }}">
            <label for="status">Status: </label>
            <button type="submit">Enviar</button>
        </form>
    </section>
    <ul>
        <li><a href="/user">Voltar</a></li>
        </ul>
</body>
</html>