@extends('layout')

@section('title', 'Editar Proyecto')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto">

                <div class="bd-callout bd-callout-warning bg-white shadow-sm rounded">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1 class="py-2 display-4 mb-0">Editar {{ __('Portfolio') }}</h1>                        
                        <a class="btn btn-outline-primary" href="{{ route('projects.index') }}">← Regresar</a>
                    </div>                    
                </div>

                @include('partials.validation-errors')

                <form class="bg-white shadow rounded py-3 px-4" action="{{ route('projects.update', $project) }}" method="POST">
                    @method('PUT')
                    @include('projects._form', ['btnText' => 'Actualizar'])        
                </form>

            </div>
        </div>
    </div>
    
@endsection