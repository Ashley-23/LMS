@extends('base', ['title' => 'Détails de la formation'])

@section('content')

    <div class="pd-20 card-box mb-30">
        <h4 class="mb-20">{{ $formation->name }}</h4>
        <p><strong>Description:</strong> {{ $formation->description }}</p>
        <p><strong>Niveau:</strong> {{ $formation->level->displayName() }}</p>
        <p><strong>Durée:</strong> {{ $formation->duration }} {{ Str::plural('heure', $formation->duration) }}</p>
        <p><strong>Créé par:</strong> {{ $formation->user?->name ?? 'N/A' }}</p>
        <a href="{{ route('formations.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
    </div>

@endsection

