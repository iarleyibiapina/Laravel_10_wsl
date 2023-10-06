<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Olá usuario</h1>

    <ul>
        <li><a href="/">Voltar</a></li>
        <li><a href="/contatos">Contatos</a></li>
        {{-- utilizando os names definidos pelo route --}}
        <li><a href="{{ route('user.create') }}">Ir para formularios</a></li>
    </ul>

    <hr>
    <h2>Criados:</h2>
    <table> 
        <thead>
            <th>assunto |</th>
            <th>descricao |</th>
            <th>status </th>
        </thead>
        <tbody>
            
            {{-- <p>{{ $dados['assunto'] }}</p>
            <p>{{ $dados['descricao'] }}</p>
            <p>{{ $dados['status'] }}</p>
            <p> teste</p>
            @foreach ($dados as $dado)
            
            {!! dd($dados) !!} --}}
                {{-- <tr>
                    erro na leitura
                    <td>{{ $dado->status }}</td>
                    <td>{{ $dado->descricao }}</td>
                    <td>{{ $dado->status }}</td>
                </tr> 
            @endforeach
            --}}
        </tbody>
    </table>
</body>
</html> 