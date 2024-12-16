@extends('layouts.app')

@section('content')
    <h1>Liste des Locations</h1>
    <a href="{{ route('locations.create') }}">Nouvelle Location</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Bien Immobilier</th>
                <th>Client</th>
                <th>Montant</th>
                <th>État</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locations as $location)
                <tr>
                    <td>{{ $location->id }}</td>
                    <td>{{ $location->bienImmobilier->adresse }}</td>
                    <td>{{ $location->client->nom }} {{ $location->client->prenom }}</td>
                    <td>{{ $location->montant }}</td>
                    <td>{{ $location->etat }}</td>
                    <td>
                        <a href="{{ route('locations.show', $location->id) }}">Voir</a>
                        <form action="{{ route('locations.destroy', $location->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
