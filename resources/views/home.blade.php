@extends('layout')

@section('title', 'Laravel 10 | Home')

@section('content')
    <h1>{{ __('Home') }}</h1>
    @auth
        {{ auth()->user()->name }}
    @endauth
    <h1>Laravel 10</h1>
@endsection
