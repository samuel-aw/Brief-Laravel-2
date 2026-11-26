@extends('layouts.app')

@section('title', 'Liste des ressources')

@section('content')
    <h2>Toutes les ressources</h2>

    @if (count($ressources) > 0)
        @foreach ($ressources as $ressource)
            <div class="card">
                <h3>{{ $ressource['titre'] }}</h3>
                <span class="badge">{{ $ressource['categorie'] }}</span>
                <p>{{ $ressource['description'] }}</p>
                <a href="{{ route('ressources.show', $ressource['id']) }}">Voir le détail</a>
            </div>
        @endforeach
    @else
        <p>Aucune ressource disponible.</p>
    @endif
@endsection
