@extends('layouts.app')

@section('title', 'Ajouter une ressource')

@section('content')
    <h2>Ajouter une ressource</h2>

    <form action="{{ route('ressources.store') }}" method="POST">
        @include('ressources._form')
    </form>
@endsection
