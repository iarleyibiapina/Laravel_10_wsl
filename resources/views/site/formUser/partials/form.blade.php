@csrf()

<x-alert />

<input type="text" placeholder="Assunto" name="assunto" value="{{ $produto->assunto ?? old('assunto') }}"
    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
<textarea name="descricao" cols="30" rows="5" placeholder="Descrição"
    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">{{ $produto->descricao ?? old('descricao') }}</textarea>
<button type="submit"
    class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Enviar</button>
