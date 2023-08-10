@extends('layout')

@section('title', 'Laravel 10 | Contact')

@section('content')
    <h1>{{ __('Contact') }}</h1>

    @include('partials.session-status')

    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <input name="name" type="text" placeholder="Nombre..." value="{{ old('name') }}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <input name="email" type="email" placeholder="Correo Electrónico..." value="{{ old('email') }}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <input name="subject" type="text" placeholder="Asunto..." value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}

        <textarea name="content" cols="30" rows="10" placeholder="Mensaje...">{{ old('content') }}</textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}

        <button>Enviar</button>
    </form>    
@endsection