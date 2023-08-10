@extends('layout')

@section('title', $project->title)

@section('content')
    <h1>{{ __('Portfolio') }}  → <code>{{ $project->created_at->format('Y-m-d') }}</code></h1>    

    <h2>{{ $project->title }}</h2>

    @auth
        <a href="{{ route('projects.edit', $project) }}">Editar</a>

        <form action="{{ route('projects.destroy', $project) }}" method="POST">
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    @endauth

    <p>{{ $project->description }}</p>
    <h5>{{ $project->created_at->diffForHumans() }}</h5>
    <a href="{{ route('projects.index') }}">← Volver</a>
@endsection