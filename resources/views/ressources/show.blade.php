@extends('layouts.app')

@section('title', $ressource['titre'])

@section('content')
    <h2>{{ $ressource['titre'] }}</h2>

    <p><span class="badge">{{ $ressource['categorie'] }}</span></p>
    <p>{{ $ressource['description'] }}</p>

    @if ($ressource['duree'] >= 120)
        <p><strong>Durée :</strong> {{ $ressource['duree'] }} min (formation longue)</p>
    @else
        <p><strong>Durée :</strong> {{ $ressource['duree'] }} min</p>
    @endif

    <a href="{{ route('ressources.index') }}">← Retour à la liste</a>
@endsection
