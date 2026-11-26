<?php

namespace Database\Seeders;

use App\Models\Ressource;
use Illuminate\Database\Seeder;

class RessourceSeeder extends Seeder
{
    public function run(): void
    {
        $ressources = [
            ['titre' => 'Clean Code',                 'type' => 'livre',            'statut' => 'disponible',  'emprunteur' => null],
            ['titre' => 'Kit Arduino Uno',            'type' => 'materiel',         'statut' => 'emprunte',    'emprunteur' => 'Amina'],
            ['titre' => 'Casque audio USB',           'type' => 'materiel',         'statut' => 'maintenance', 'emprunteur' => null],
            ['titre' => 'Support PHP POO',            'type' => 'support de cours', 'statut' => 'disponible',  'emprunteur' => null],
            ['titre' => 'Ordinateur portable Lenovo', 'type' => 'ordinateur',       'statut' => 'emprunte',    'emprunteur' => 'Mehdi'],
            ['titre' => 'One Piece',                  'type' => 'manga',            'statut' => 'disponible',  'emprunteur' => null],
            ['titre' => 'Black Clover',               'type' => 'manga',            'statut' => 'emprunte',    'emprunteur' => 'Samuel'],
        ];

        foreach ($ressources as $ressource) {
            Ressource::create($ressource);
        }
    }
}
