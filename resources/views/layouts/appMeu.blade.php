{{-- template que sera reaproveitado em cada view --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- pegando o titulo ou o titulo default da aplicaçao em 'app' que no caso esta definido como Laravel --}}
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    @yield('css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<section class="">
    @include('layouts.navMeu')
    @yield('header')
    {{-- todo conteudo que vai ser renderizado de forma dinamica --}}
    <div class="content container px-4 mx-auto py-4">
        @yield('content')
    </div>
    <footer>
        @yield('footer')
    </footer>
</section>

@yield('js')

<body>

</body>

</html>
