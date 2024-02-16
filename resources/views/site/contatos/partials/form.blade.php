@csrf
<x-alert />

<label for="contato">Contato
</label>
<input type="text" name="contato" placeholder="(xx)9-xxxx-xxxx" required
    value="{{ isset($contato) ? $contato : old('contato') }}">
