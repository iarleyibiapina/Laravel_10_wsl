@extends('layouts.appMeu')

@section('title', 'Contatos ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/site/contatos.css') }}">
@endsection


@section('header')
    <h1 class="h-contato w-100 h-100 py-3 text-center bg-green-200">Aqui ficará os contatos</h1>
@endsection

@section('content')
    @if ($dados)
        <x-success />
        <div class="flex justify-end">
            <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full m-2 p-2 self-end"
                href="{{ route('contatos.create.form') }}">Criar contatos</a>
        </div>
        <hr>
        <section class="py-3 my-3">
            <ol>
                @foreach ($dados as $dado)
                    {{-- paginação simples --}}
                    <li class="py-4">Numero.: {{ $dado['contato'] }} <a
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                            href="{{ route('contatos.show', $dado->id) }}">ver
                            contato</a></li>
                @endforeach
                {{ $dados->links() }}
            </ol>
        </section>
    @endif
@endsection

@section('js')
    <script></script>
@endsection
