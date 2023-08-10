@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <ul>{{ $error }}</ul>
        @endforeach
    </ul>
@endif