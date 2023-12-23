<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/table.css") }}">

    <title>Contatos</title>
</head>
<body>
    @if($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif
    <h1>Aqui ficará os contatos</h1>
    <ul>
        <li><a class="btn" href="{{  route('contatos.index') }}">Voltar</a></li>
    </ul>

    <form action="{{ route('contatos.create.process') }}" method="POST">
        @csrf
    <label for="contato">Contato    
    </label>
<input type="text" name="contato" placeholder="(xx)9-xxxx-xxxx" required value="{{ old('contato') }}">
<input class="btn" type="submit" value="enviar">
</form>
</body>
</html>