@extends('layouts.app')

@section('title', 'Modifier ' . $ressource->titre)

@section('content')
    <h2>Modifier la ressource</h2>

    <form action="{{ route('ressources.update', $ressource) }}" method="POST">
        @method('PUT')
        @include('ressources._form')
    </form>
@endsection
