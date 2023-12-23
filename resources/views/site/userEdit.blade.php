<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/table.css") }}">
    <title>Editar dados</title>
</head>
<body>
    {{-- utilizando component, para reaproveitar componentes em varias partes do projeto --}}
    <h1>Editando o assunto {{ $dados->assunto }}</h1>
    <section>
        {{-- importando o component, 'x' e 'nomeComponenet', se quiser passar algum conteudo, pega esse conteudo no component com {{ $slot }} , como não há nada passando pode ser fechado assim x-alert/--}}
        <x-alert/>
        {{-- id que vai ser alterado --}}
        {{-- {{ dd($dados) }} --}}
        <form action="{{ route('user.update', $dados->id) }}" method="POST">
            @method('PUT')
            {{-- como é edit, enviando dados para o form --}}
            @include('site.formUser.partials.form', [
                'produto' => $dados
            ])
        </form>
    </section>
    <ul>
        <li><a class="btn" href="/user">Voltar</a></li>
        </ul>
</body>
</html>