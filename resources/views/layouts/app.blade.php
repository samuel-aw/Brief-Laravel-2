<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ressources') - {{ config('app.name') }}</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 900px; margin: 0 auto; padding: 1rem; }
        header, footer { padding: 1rem 0; border-bottom: 1px solid #ddd; }
        footer { border-top: 1px solid #ddd; border-bottom: none; margin-top: 2rem; color: #777; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { border: 1px solid #ddd; padding: .5rem; text-align: left; }
        th { background: #f5f5f5; }
        .badge { background: #eef; padding: 2px 8px; border-radius: 4px; font-size: .85rem; }
        .alert { padding: .75rem 1rem; border-radius: 6px; margin: 1rem 0; }
        .alert-success { background: #e6f6e6; border: 1px solid #9ad29a; color: #1d5c1d; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; font-weight: bold; margin-bottom: .25rem; }
        input, select { width: 100%; padding: .5rem; box-sizing: border-box; }
        .error { color: #b00020; font-size: .9rem; margin: .25rem 0 0; }
        .btn { display: inline-block; padding: .4rem .8rem; border: 1px solid #333; border-radius: 4px;
            background: #fff; cursor: pointer; text-decoration: none; color: #000; font-size: .9rem; }
        .btn-danger { border-color: #b00020; color: #b00020; }
        .actions { display: flex; gap: .5rem; align-items: center; }
        .actions form { margin: 0; }
    </style>
</head>
<body>
<header>
    <h1><a href="{{ route('ressources.index') }}">{{ config('app.name') }}</a></h1>
    <a class="btn" href="{{ route('ressources.create') }}">+ Ajouter une ressource</a>
</header>

<main>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @yield('content')
</main>

<footer>
    <p>Projet d'apprentissage Laravel</p>
</footer>
</body>
</html>
