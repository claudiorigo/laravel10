@if (session('status'))

    {{ session('status') }}<br>
    <a href="{{ route('contact') }}">← Volver</a>

@endif