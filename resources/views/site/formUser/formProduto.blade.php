<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <section>
        <form action="{{ route('user.store') }}" method="POST">
            {{-- <input type="text" value="{{ csrf_token() }}" hidden name="_token"> --}}
            {{-- outra forma de criar o token automatico --}}
            @csrf()
            <label for="assunto">Assunto: </label>
            {{-- name tem que ser a mesma da tabela do banco --}}
            <input type="text" name="assunto">
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" >
            <label for="status">Status: </label>
            <select name="status" id="statusId" >
                <option value="ativo">ativo</option>
                <option value="em analise">em analise</option>
                <option value="finalizado">finalizado</option>
            </select>
            <button type="submit">Enviar</button>
        </form>
    </section>
    <ul>
        <li><a href="/user">Voltar</a></li>
        </ul>
</body>
</html>