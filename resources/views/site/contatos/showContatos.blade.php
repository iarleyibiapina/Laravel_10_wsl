@extends('layouts.appMeu')

@section('title', 'Contatos - Show')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/site/contatos.css') }}">
@endsection


@section('header')
    <h1 class="h-contato w-100 h-100 py-3 text-center bg-green-200">Contato </h1>
@endsection

@section('content')
    @if ($showRequests)
        <div class="flex justify-end">
            <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full m-2 p-2 self-end"
                href="{{ route('contatos.index') }}">Voltar contatos</a>
        </div>
        <hr>
        <section class="py-3 my-3">
            <table class="table-fixed w-100 ">
                <thead>
                    <tr>
                        <th class="px-4 w-1/2 py-2">Titulo</th>
                        <th class="px-4 w-1/4 py-2">Ações</th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr class="m-2 ">
                        <td class="border px-4 m-2 py-2 w-100">{{ $showRequests['contato'] }}</td>
                        <td class="border px-4 m-2 py-2"><a
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                                href="{{ route('contatos.edit', $showRequests->id) }}">alterar</a></td>
                        <td class="border px-4 m-2 py-2"><a
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                                href="{{ route('contatos.delete.form', $showRequests->id) }}">excluir</a></td>
                    </tr>
                </tbody>
            </table>
        </section>
    @endif
@endsection

@section('js')
    <script></script>
@endsection
