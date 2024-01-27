<div class="alert-danger">
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p><strong>{{ $error }}</strong></p>
        @endforeach
    @endif
</div>
