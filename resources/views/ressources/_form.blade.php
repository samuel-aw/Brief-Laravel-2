@csrf

<div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" id="titre" name="titre" value="{{ old('titre', $ressource->titre ?? '') }}">
    @error('titre')
    <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="type">Type</label>
    <select id="type" name="type">
        <option value="">-- Choisir --</option>
        @foreach ($types as $type)
            <option value="{{ $type }}" @selected(old('type', $ressource->type ?? '') === $type)>
                {{ ucfirst($type) }}
            </option>
        @endforeach
    </select>
    @error('type')
    <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="statut">Statut</label>
    <select id="statut" name="statut">
        @foreach ($statuts as $statut)
            <option value="{{ $statut }}" @selected(old('statut', $ressource->statut ?? 'disponible') === $statut)>
                {{ ucfirst($statut) }}
            </option>
        @endforeach
    </select>
    @error('statut')
    <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="emprunteur">Emprunteur (si emprunté)</label>
    <input type="text" id="emprunteur" name="emprunteur" value="{{ old('emprunteur', $ressource->emprunteur ?? '') }}">
    @error('emprunteur')
    <p class="error">{{ $message }}</p>
    @enderror
</div>

<button type="submit" class="btn">Enregistrer</button>
<a class="btn" href="{{ route('ressources.index') }}">Annuler</a>
