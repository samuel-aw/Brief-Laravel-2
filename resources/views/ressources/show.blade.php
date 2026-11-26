@extends('layouts.app')

@section('title', $ressource->titre)

@section('content')
    <h2>{{ $ressource->titre }}</h2>

    <p><strong>Type :</strong> {{ $ressource->type }}</p>
    <p><strong>Statut :</strong> <span class="badge">{{ $ressource->statut }}</span></p>

    @if ($ressource->emprunteur)
        <p><strong>Emprunteur :</strong> {{ $ressource->emprunteur }}</p>
    @endif

    <p><small>Ajoutée le {{ $ressource->created_at->format('d/m/Y à H:i') }}</small></p>

    <div class="actions">
        <a class="btn" href="{{ route('ressources.index') }}">← Retour à la liste</a>
        <a class="btn" href="{{ route('ressources.edit', $ressource) }}">Modifier</a>
        <form action="{{ route('ressources.destroy', $ressource) }}" method="POST"
              onsubmit="return confirm('Supprimer cette ressource ?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
@endsection
