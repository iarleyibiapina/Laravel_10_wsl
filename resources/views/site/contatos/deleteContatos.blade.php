@extends('layouts.appMeu')

@section('title', 'Contatos - Delete')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/site/contatos.css') }}">
@endsection


@section('header')
    <h3 class="h-contato w-100 h-100 py-3 text-center bg-green-200">Contato a deletar: {{ $deleteRequests->contato }}</h3>
@endsection

@section('content')
    <div class="flex justify-end">
        <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full m-2 p-2 self-end"
            href="{{ route('contatos.show', $deleteRequests->id) }}">Voltar</a>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif

    <form action="{{ route('contatos.delete.process', $deleteRequests->id) }}" method="POST">
        @method('DELETE')
        @include('site.contatos.partials.form', [
            'contato' => $deleteRequests->contato,
        ])
        <button type="submit"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Deletar</button>
    </form>
@endsection

@section('js')
    <script></script>
@endsection
