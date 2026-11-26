<?php

namespace App\Http\Controllers;

class RessourceController extends Controller
{
    /**
     *Données en dur (remplacées plus tard par la base de données)
     *La clé du tableau sert d'identifiant
     */
    private function getRessources(): array {
        return [
            1 => [
                'id' => 1,
                'titre' => 'Introduction à la POO en PHP',
                'categorie' => 'PHP',
                'description' => 'Classes, objets, héritage et encapsulation.',
                'duree' => 120,
            ],
            2 => [
                'id' => 2,
                'titre' => 'Comprendre le modèle MVC',
                'categorie' => 'Architecture',
                'description' => 'Séparer les modèles, les vues et les contrôleurs.',
                'duree' => 90,
            ],
            3 => [
                'id' => 3,
                'titre' => 'Premiers pas avec Laravel',
                'categorie' => 'Laravel',
                'description' => 'Routes, contrôleurs et vues Blade.',
                'duree' => 150,
            ],
        ];
    }

    /**
     * Affiche la liste des ressources
     */
    public function index()
    {
        $ressources = $this->getRessources();

        return view('ressources.index', compact('ressources'));
    }

    /**
     * Affiche le détail d'une ressource
     */
    public function show(int $id)
    {
        $ressources = $this->getRessources();

        // Si l'id n'existe pas, on renvoie une erreur 404
        $ressource = $ressources[$id] ?? abort(404);

        return view('ressources.show', compact('ressource'));
    }
}
