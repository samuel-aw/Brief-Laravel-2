@extends('layouts.app')

@section('title', 'Liste des ressources')

@section('content')
    <h2>Toutes les ressources</h2>

    @if ($ressources->count() > 0)
        <table>
            <thead>
            <tr>
                <th>Titre</th>
                <th>Type</th>
                <th>Statut</th>
                <th>Emprunteur</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($ressources as $ressource)
                <tr>
                    <td>{{ $ressource->titre }}</td>
                    <td>{{ $ressource->type }}</td>
                    <td><span class="badge">{{ $ressource->statut }}</span></td>
                    <td>{{ $ressource->emprunteur ?? '-' }}</td>
                    <td>
                        <div class="actions">
                            <a class="btn" href="{{ route('ressources.show', $ressource) }}">Voir</a>
                            <a class="btn" href="{{ route('ressources.edit', $ressource) }}">Modifier</a>
                            <form action="{{ route('ressources.destroy', $ressource) }}" method="POST"
                                  onsubmit="return confirm('Supprimer cette ressource ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Aucune ressource disponible.</p>
    @endif
@endsection
