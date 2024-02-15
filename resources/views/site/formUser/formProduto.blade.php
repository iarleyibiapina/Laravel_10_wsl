@extends('admin.layouts.app')

@section('title', 'Criando')

@section('header')

    <div class="flex items-center gap-x-3">
        <a class="btn" href="{{ route('user.index') }}">Voltar</a>
        <h1 class="text-lg text-black-500">Criando novos dados</h1>
    </div>
@endsection

@section('content')

    <x-alert />

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
@endsection
