    @extends('layouts.appMeu')

    @section('title', 'Contatos - Edit')

    @section('css')
        <link rel="stylesheet" href="{{ asset('css/site/contatos.css') }}">
    @endsection


    @section('header')
        <h3 class="h-contato w-100 h-100 py-3 text-center bg-green-200">Contato anterior: {{ $editRequests->contato }}</h3>
    @endsection

    @section('content')
        <div class="flex justify-end">
            <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full m-2 p-2 self-end"
                href="{{ route('contatos.show', $editRequests->id) }}">Voltar</a>
        </div>

        <x-alert />


        <form action="{{ route('contatos.update', $editRequests->id) }}" method="POST">
            @method('PUT')
            @csrf
            <label for="contato">Novo Contato:
            </label>
            <input type="text" name="contato" placeholder="(xx)9-xxxx-xxxx" required value="{{ old('contato') }}">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Alterar</button>
        </form>
    @endsection

    @section('js')
        <script></script>
    @endsection
