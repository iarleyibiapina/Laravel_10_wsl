@csrf()
<label for="assunto">Assunto: </label>
{{-- ?? um if ternario --}}
{{-- name tem que ser a mesma da tabela do banco --}}
<input type="text" name="assunto" value="{{ $produto->assunto ?? old('assunto') }}">
<label for="descricao">Descrição: </label>
{{-- <input type="text" name="descricao" value="{{ old('descricao') }}"> --}}
<textarea id="descricao" name="descricao" rows="4" required>{{ $produto->descricao ?? old('descricao') }}</textarea>
<button class="btn" type="submit">Enviar</button>