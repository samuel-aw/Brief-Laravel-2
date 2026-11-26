# Ressources Laravel

Application de démonstration migrée vers Laravel : liste et détail de ressources
pédagogiques (données en dur, sans base de données).

## Prérequis

- PHP >= 8.2
- Composer
- Git

## Installation

```bash
git clone https://github.com/samuel-aw/Brief-Laravel-1.git
cd ressources-laravel
composer install
cp .env.example .env
php artisan key:generate
```

## Configuration du .env

Variables à vérifier dans `.env` :

```env
APP_NAME="Ressources Laravel"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000
SESSION_DRIVER=file
```

Le fichier `.env` n'est pas versionné : chaque développeur crée le sien depuis `.env.example`.

## Lancement

```bash
php artisan serve
```

Puis ouvrir http://127.0.0.1:8000

## Commandes Artisan utiles

| Commande | Description |
|---|---|
| `php artisan serve` | Lance le serveur de développement |
| `php artisan route:list` | Liste toutes les routes |
| `php artisan make:controller NomController` | Crée un contrôleur |
| `php artisan make:controller NomController --resource` | Crée un contrôleur CRUD |
| `php artisan make:model Nom` | Crée un modèle |
| `php artisan view:clear` | Vide le cache des vues |
| `php artisan config:clear` | Vide le cache de la configuration |
| `php artisan list` | Affiche toutes les commandes disponibles |

## Structure principale

- `routes/web.php` : routes web
- `app/Http/Controllers/RessourceController.php` : contrôleur
- `resources/views/layouts/app.blade.php` : layout commun
- `resources/views/ressources/` : vues index et show
