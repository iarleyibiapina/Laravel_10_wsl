<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>
        Bem vindo a pagina inicial</Em>
    </h1>
    <ul>
        <li><a href="{{ route('user.index') }}" style="text-decoration: none">Ir para Usuarios</a></li>
        <li><a href="{{  route("contatos.index") }}" style="text-decoration: none">Ir para contatos</a></li>
        <li><a href="{{ route('admin.index') }}" style="text-decoration: none">Ir para pagina de admin</a></li>
    </ul>
</body>
</html>