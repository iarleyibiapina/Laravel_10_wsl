{{-- vai definiir onde o template vai estar localizado --}}
@extends('admin.layouts.app')

{{-- titulo da pagina --}}
@section('title', 'Titulo Home')

{{-- Header dinamico desta pagina  --}}
@section('header')
    {{-- include do partials header de home --}}
    {{-- Esta view pega a variavel $produto do controller, mas dentro do include
        esta variavel não existe, então é passado de um blade para o outro variaveis 
        desta forma:  --}}
    @include('site.partials.header', [
        'total' => $dados->totalItems(),
    ])
    {{-- outra alternativa, mas teria que buscar a função la dentro --}}
    {{-- @include('site.partials.header', compact('produto')) --}}
@endsection

{{-- onde tiver o content, 'coloca' este conteudo --}}
@section('content')
    @include('site.partials.content', compact('dados'))

    {{-- component para paginar --}}
    <x-pagination :paginator="$dados" :appends="$filters"></x-pagination>
@endsection

@section('footer')
    {{-- aqui é possivel definir um js, geralmente próprio desta página --}}
    <div class="w-100 text-center">

        <p> &copy; I A R L E Y</p>
    </div>
@endsection
