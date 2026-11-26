<?php

namespace App\Http\Controllers;

use App\Models\Ressource;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RessourceController extends Controller
{
    /**
     * Liste de toutes les ressources
     */
    public function index()
    {
        $ressources = Ressource::latest()->get();

        return view('ressources.index', compact('ressources'));
    }

    /** Formulaire d'ajout */
    public function create() {
        $types = Ressource::TYPES;
        $statuts = Ressource::STATUTS;

        return view('ressources.create', compact('types', 'statuts'));
    }

    public function store(Request $request): RedirectResponse {
        $donnees = $this->validerDonnees($request);

        Ressource::create($donnees);

        return redirect()
            ->route('ressource.index')
            ->with('success', 'La ressource a bien été ajoutée.');
    }

    /**
     * Affiche le détail d'une ressource
     */
    public function show(Ressource $ressource)
    {
        return view('ressources.show', compact('ressource'));
    }

    /** Formulaire de modification */
    public function edit(Ressource $ressource) {
        $types = Ressource::TYPES;
        $statuts = Ressource::STATUTS;

        return view('ressources.edit', compact('ressource', 'types', 'statuts'));
    }

    /** Met à jour une ressource */
    public function update(Request $request, Ressource $ressource): RedirectResponse {
        $donnees = $this->validerDonnees($request);

        $ressource->update($donnees);

        return redirect()
            ->route('ressources.show', $ressource)
            ->with('success', 'La ressource a bien été modifiée.');
    }

    /** Supprimer une ressource */
    public function destroy(Ressource $ressource): RedirectResponse {
        $ressource->delete();

        return redirect()
            ->route('ressource.index')
            ->with('success', 'La ressource a bien été supprimée');
    }

    /**
     * Règles de validation communes à store() et update()
     * Une seule méthode = pas de duplication
     */
    private function validerDonnees(Request $request): array {
        $donnees = $request->validate([
            'titre'      => ['required', 'string', 'max:255'],
            'type'       => ['required', Rule::in(Ressource::TYPES)],
            'statut'     => ['required', Rule::in(Ressource::STATUTS)],
            'emprunteur' => ['nullable', 'string', 'max:255', 'required_if:statut,emprunte'],
        ], [
            'titre.required'          => 'Le titre est obligatoire.',
            'titre.max'               => 'Le titre ne doit pas dépasser 255 caractères.',
            'type.required'           => 'Le type est obligatoire.',
            'type.in'                 => 'Le type choisi n\'est pas valide.',
            'statut.required'         => 'Le statut est obligatoire.',
            'statut.in'               => 'Le statut choisi n\'est pas valide.',
            'emprunteur.max'          => 'Le nom de l\'emprunteur ne doit pas dépasser 255 caractères.',
            'emprunteur.required_if'  => 'L\'emprunteur est obligatoire quand la ressource est empruntée.',
        ]);

        // Règle métier : sans statut "emprunte", il n'y a pas d'emprunteur
        if ($donnees['statut'] !== 'emprunte') {
            $donnees['emprunteur'] = null;
        }

        return $donnees;
    }
}
