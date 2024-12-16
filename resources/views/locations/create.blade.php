@extends('layouts.app')

@section('content')
    <h1>Nouvelle Location</h1>
    <form action="{{ route('locations.store') }}" method="POST">
        @csrf
        <label for="bien_immobilier_id">Bien Immobilier</label>
        <select name="bien_immobilier_id" required>
            @foreach ($biens as $bien)
                <option value="{{ $bien->id }}">{{ $bien->adresse }}</option>
            @endforeach
        </select>

        <label for="client_id">Client</label>
        <select name="client_id" required>
            @foreach ($clients as $client)
                <option value="{{ $client->id }}">{{ $client->nom }} {{ $client->prenom }}</option>
            @endforeach
        </select>

        <label for="date_debut">Date de Début</label>
        <input type="date" name="date_debut" required>

        <label for="date_fin">Date de Fin</label>
        <input type="date" name="date_fin" required>

        <label for="montant">Montant</label>
        <input type="number" name="montant" step="0.01" required>

        <label for="etat">État</label>
        <input type="text" name="etat" required>

        <button type="submit">Créer</button>
    </form>
@endsection
