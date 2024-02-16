        {{-- <legend for="status">Status:</legend>
        <td><strong>{{ $dados->status }}</strong></td>
        <legend for="assunto">Assunto:</legend>
        <td><strong>{{ $dados->assunto }}</strong></td>
        <legend for="descricao">Descrição:</legend>
        <td><strong>{{ $dados->descricao }}</strong></td>
        metodo delete, precisa do csrf(token de validação de formularios) e metodo http ('delete')
        <form action="{{ route('user.delete', $dados->id) }}" method="POST">
            @csrf()
            @method('DELETE')
            <button type="submit">Deletar</button>
    </form> --}}

        @extends('admin.layouts.app')

        @section('title', 'Exibindo dados e apagando')

        @section('header')

            <div class="flex items-center gap-x-3">
                <a class="btn" href="{{ route('user.index') }}">Voltar</a>
                <h1 class="text-lg text-black-500"><strong>Exibindo dados existentes</strong></h1>
                <h2>Exibindo o assunto {{ $dados->assunto }}</h2>
            </div>
        @endsection

        @section('content')
            <section>
                <legend for="status">Status:</legend>
                <td><strong>{{ $dados->status }}</strong></td>
                <legend for="assunto">Assunto:</legend>
                <td><strong>{{ $dados->assunto }}</strong></td>
                <legend for="descricao">Descrição:</legend>
                <td><strong>{{ $dados->descricao }}</strong></td>
                {{--  --}}
                <form action="{{ route('user.delete', $dados->id) }}" method="POST">
                    @csrf()
                    @method('DELETE')
                    <button type="submit"
                        class="btn bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">Deletar</button>
                </form>
            </section>
        @endsection
