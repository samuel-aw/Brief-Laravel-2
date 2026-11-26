<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ressources') - {{ config('app.name') }}</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 1rem; }
        header, footer { padding: 1rem 0; border-bottom: 1px solid #ddd; }
        footer { border-top: 1px solid #ddd; border-bottom: none; margin-top: 2rem; color: #777; }
        .card { border: 1px solid #ddd; border-radius: 8px; padding: 1rem; margin-bottom: 1rem; }
        .badge { background: #eef; padding: 2px 8px; border-radius: 4px; font-size: .85rem; }
    </style>
</head>
<body>
<header>
    <h1><a href="{{ route('ressources.index') }}">{{ config('app.name') }}</a></h1>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>Projet d'apprentissage Laravel</p>
</footer>
</body>
</html>
