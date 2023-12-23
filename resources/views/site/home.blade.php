<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/table.css") }}">
        <title>Usuario</title>
</head>
<body>
    <h1>Olá usuario</h1>

    <ul class="nav">
        <li><a class="btn" href="/">Voltar</a></li>
        <li><a class="btn" href="{{  route('contatos.index') }}">Contatos</a></li>
        {{-- utilizando os names definidos pelo route --}}
        {{-- {{ dd($dados) }} --}}
        {{-- <li><a href="{{ route('user.form', $dados[0]['id']) }}">Ir para formularios</a></li> --}}
        <li><a class="btn" href="{{ route('user.form') }}">Ir para formularios</a></li>
    </ul>

    <hr>
    <h2>Criados:</h2>
    <table> 
        <thead>
            <th>Assunto </th>
            <th>descricao </th>
            <th>status </th>
            <th>Ações</th>
        </thead>
        <tbody>
             {{-- {!! dd($dados) !!}  --}}
             {{-- pegando os dados enviados pelo controller (ProdutoController) consultado pelo model (produto) e enviando pela url (compact('dados'))--}}
             @foreach ($dados as $dado)
             <tr>
                    {{-- <td> {{ $dado->assunto }} | </td>
                    <td>{{ $dado->descricao }} |</td>
                    <td>{{ $dado->status }}</td> --}}
                    {{-- por conta de alterações, agora é um array e não u objeto --}}
                    <td> {{ $dado['assunto'] }}</td>
                    <td>{{ $dado['descricao'] }}</td>
                    <td>{{ $dado['status'] }}</td>
                    <td><a class="btn" href="{{ route('user.show', $dado['id']) }}">Visualizar</a><a class="btn" href="{{ route('user.edit', $dado['id']) }}">Editar</a></td>
             </tr> 
            @endforeach
           
        </tbody>
    </table>
</body>
</html> 