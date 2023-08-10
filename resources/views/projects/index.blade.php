@extends('layout')

@section('title', 'Laravel 10 | Portfolio')

@section('content')

    <h1>{{ __('Portfolio') }}</h1>
    
    @auth
        <a href="{{ route('projects.create') }}">Crear Proyecto</a>        
    @endauth
    
    <ul>
        @forelse ($projects as $project)            
            <li>
                <a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a>
            </li>
        @empty        
            <li>No hay proyectos para mostrar</li>        
        @endforelse
        {{ $projects->links() }}
    </ul>
    
@endsection