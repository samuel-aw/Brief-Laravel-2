<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    use HasFactory;

    // Valeurs autorisées (réutilisées par la validation et les formulaires)
    public const TYPES = ['livre', 'materiel', 'support de cours', 'ordinateur', 'manga'];
    public const STATUTS = ['disponible', 'emprunte', 'maintenance'];

    // Champs que l'on a le droit de remplir "en masse"
    protected $fillable = ['titre', 'type', 'statut', 'emprunteur'];
}
