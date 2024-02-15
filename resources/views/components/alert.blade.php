<!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 my-4" role="alert">
            <p><strong>{{ $error }}</strong></p>
        </div>
    @endforeach
@endif
