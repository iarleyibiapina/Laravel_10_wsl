<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contatos</title>
</head>
<body>
    @if($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif
    <h1>Editar</h1>
    <ul>
        <li><a href="{{ route('contatos.index') }}">Voltar</a></li>
    </ul>
    <form action="{{ route('contatos.update', $editRequests->id) }}" method="POST">
        @method('PUT')
        @csrf
        <h4>Contato anterior: {{ $editRequests->contato }}</h4>
    <label for="contato">Novo Contato:
    </label>
<input type="text" name="contato" placeholder="(xx)9-xxxx-xxxx" required value="{{ old('contato') }}">
<input type="submit" value="enviar">
</form>
</body>
</html>