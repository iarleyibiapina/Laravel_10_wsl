@extends('admin.layouts.app')

@section('title', 'Editando')

@section('header')

    <div class="flex items-center gap-x-3">
        <a class="btn" href="{{ route('user.index') }}">Voltar</a>
        <h1 class="text-lg text-black-500"><strong>Editando dados existentes</strong></h1>
        <h2>Editando o assunto {{ $dados->assunto }}</h2>
    </div>
@endsection

@section('content')


    <h1>Formulario de edição</h1>
    <section>

        @csrf()
        <form action="{{ route('user.update', $dados->id) }}" method="POST">
            @method('PUT')
            @include('site.formUser.partials.form', [
                'produto' => $dados,
            ])
        </form>
    </section>
@endsection
