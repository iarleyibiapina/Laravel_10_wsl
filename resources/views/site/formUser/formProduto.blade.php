<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <title>Formulario</title>
</head>

<body>
    {{-- com a atualizaçao de request --}}
    {{-- se houver qualquer tipo de error --}}
    @if ($errors->any())
        {{-- para cada error, pegando todos os erros --}}
        @foreach ($errors->all() as $error)
            <p><strong>{{ $error }}</strong></p>
        @endforeach
    @endif
    <h1>Formulario</h1>
    <section>
        @csrf()
        <form action="{{ route('user.store') }}" method="POST">
            {{-- <input type="text" value="{{ csrf_token() }}" hidden name="_token"> --}}
            {{-- outra forma de criar o token automatico --}}
            {{-- evitando duplicação de codigo com include --}}
            @include('site.formUser.partials.form')
        </form>
    </section>
    <ul>
        <li><a class="btn" href="/user">Voltar</a></li>
    </ul>
</body>

</html>
