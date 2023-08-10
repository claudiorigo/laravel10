@extends('layout')

@section('title', 'Editar Proyecto')

@section('content')
    <h1>{{ __('Portfolio') }} > Editar proyecto</h1>    

    @include('partials.validation-errors')

    <form action="{{ route('projects.update', $project) }}" method="POST">
        @method('PUT')
        @include('projects._form', ['btnText' => 'Actualizar'])        
    </form>
    
@endsection