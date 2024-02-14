{{-- vai definiir onde o template vai estar localizado --}}
@extends('admin.layouts.app')

{{-- titulo da pagina --}}
@section('title', 'Titulo Home');

{{-- Header dinamico desta pagina  --}}
@section('header')
    <h1>Olá usuario</h1>

    <ul class="nav">
        <li><a class="btn" href="/">Voltar</a></li>
        <li><a class="btn" href="{{ route('contatos.index') }}">Contatos</a></li>
        {{-- utilizando os names definidos pelo route --}}
        {{-- {{ dd($dados) }} --}}
        {{-- <li><a href="{{ route('user.form', $dados[0]['id']) }}">Ir para formularios</a></li> --}}
        <li><a class="btn" href="{{ route('user.form') }}">Ir para formularios</a></li>
    </ul>
@endsection

{{-- onde tiver o content, 'coloca' este conteudo --}}
@section('content')
    <hr>
    <h2>Criados:</h2>
    <table>
        <thead>
            <th>Assunto </th>
            <th>descricao </th>
            <th>status </th>
            <th>Ações</th>
        </thead>
        <tbody>
            {{-- {!! dd($dados) !!}  --}}
            {{-- pegando os dados enviados pelo controller (ProdutoController) consultado pelo model (produto) e enviando pela url (compact('dados')) --}}
            @foreach ($dados->items() as $dado)
                <tr>
                    {{-- <td> {{ $dado->assunto }} | </td>
                    <td>{{ $dado->descricao }} |</td>
                    <td>{{ $dado->status }}</td> --}}
                    {{-- por conta de alterações, agora é um array e não u objeto --}}
                    <td> {{ $dado->assunto }}</td>
                    <td>{{ $dado->descricao }}</td>
                    <td>{{ getStatusSupport($dado->status) }}</td>
                    <td><a class="btn" href="{{ route('user.show', $dado->id) }}">Visualizar</a><a class="btn"
                            href="{{ route('user.edit', $dado->id) }}">Editar</a></td>
                </tr>
            @endforeach

            {{-- component para paginar --}}
            <x-pagination :paginator="$dados" :appends="$filters"></x-pagination>

        </tbody>
    </table>
@endsection

@section('footer')
    {{-- aqui é possivel definir um js, geralmente próprio desta página --}}
    <p> &copy; I A R L E Y</p>
@endsection
