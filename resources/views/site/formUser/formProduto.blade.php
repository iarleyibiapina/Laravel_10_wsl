<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    {{-- com a atualizaçao de request --}}
    {{-- se houver qualquer tipo de error --}}
    @if($errors->any())
    {{-- para cada error, pegando todos os erros --}}
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    <h1>Formulario</h1>
    <section>
        @csrf()
        <form action="{{ route('user.create') }}" method="POST">
            {{-- <input type="text" value="{{ csrf_token() }}" hidden name="_token"> --}}
            {{-- outra forma de criar o token automatico --}}
            @csrf()
            <label for="assunto">Assunto: </label>
            {{-- name tem que ser a mesma da tabela do banco --}}
            <input type="text" name="assunto" value="{{ old('assunto') }}">
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" value="{{ old('descricao') }}">
            <button type="submit">Enviar</button>
        </form>
    </section>
    <ul>
        <li><a href="/user">Voltar</a></li>
        </ul>
</body>
</html>