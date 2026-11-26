# Ressources Laravel

Application de démonstration migrée vers Laravel 

## Prérequis

- PHP >= 8.2
- Composer
- Git

## Installation

```bash
git clone https://github.com/samuel-aw/Brief-Laravel-2.git
cd ressources-laravel
composer install
cp .env.example .env
php artisan key:generate
```
## Base de données

Créer une base vide `ressources_laravel` (utf8mb4_unicode_ci) puis renseigner dans `.env` :

## Configuration du .env

Variables à vérifier dans `.env` :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ressources_laravel
DB_USERNAME=root
DB_PASSWORD=
```

Le fichier `.env` n'est pas versionné : chaque développeur crée le sien depuis `.env.example`.

## Lancement

### Migrations et seeders

```bash
php artisan migrate              # exécute les migrations
php artisan migrate:fresh        # supprime tout et recrée les tables
php artisan migrate:fresh --seed # recrée les tables et insère les données de test
php artisan db:seed              # lance uniquement les seeders
php artisan route:list           # liste les routes du CRUD
```

## Cas de test manuels

| # | Scénario | Résultat attendu |
|---|---|---|
| 1 | Ajouter une ressource valide (titre, type, statut « disponible ») | Redirection vers la liste, message flash vert, ressource visible |
| 2 | Envoyer le formulaire avec le titre vide | Message d'erreur sous le champ, les autres champs restent remplis |
| 3 | Choisir le statut « emprunte » sans renseigner l'emprunteur | Erreur « L'emprunteur est obligatoire… » |
| 4 | Modifier une ressource existante (changer son statut) | Redirection vers le détail, message flash, valeurs mises à jour |
| 5 | Supprimer une ressource (confirmer la boîte de dialogue) | Ressource disparue de la liste, message flash de suppression |
| 6 | Ouvrir `/ressources/9999` | Page 404 |
| 7 | Rafraîchir la page (F5) après un ajout | Aucun doublon créé (redirection après POST) |
