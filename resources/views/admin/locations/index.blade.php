<!-- resources/views/admin/locations/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Gestion des Locations</h1>

    <!-- Formulaire de filtrage -->
    <div class="card mb-4">
        <div class="card-body">
            <form method="GET" action="{{ route('admin.locations.index') }}" class="row g-3">
                <div class="col-md-3">
                    <label class="form-label">État</label>
                    <select name="etat" class="form-control">
                        <option value="">Tous</option>
                        <option value="En cours" {{ request('etat') == 'En cours' ? 'selected' : '' }}>En cours</option>
                        <option value="Terminée" {{ request('etat') == 'Terminée' ? 'selected' : '' }}>Terminée</option>
                        <option value="En attente" {{ request('etat') == 'En attente' ? 'selected' : '' }}>En attente</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Montant minimum</label>
                    <input type="number" name="montant_min" class="form-control" value="{{ request('montant_min') }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Montant maximum</label>
                    <input type="number" name="montant_max" class="form-control" value="{{ request('montant_max') }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Date début</label>
                    <input type="date" name="date_debut" class="form-control" value="{{ request('date_debut') }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Date fin</label>
                    <input type="date" name="date_fin" class="form-control" value="{{ request('date_fin') }}">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Filtrer</button>
                    <a href="{{ route('admin.locations.index') }}" class="btn btn-secondary">Réinitialiser</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Table des locations -->
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Client</th>
                    <th>Bien immobilier</th>
                    <th>Date début</th>
                    <th>Date fin</th>
                    <th>Montant</th>
                    <th>État</th>
                    <th>Actions</th>  <!-- Nouvelle colonne -->
                </tr>
            </thead>
            <tbody>
                @foreach($locations as $location)
                <tr>
                    <td>{{ $location->client->name }}</td>
                    <td>{{ $location->bienImmobilier->titre }}</td>
                    <td>{{ $location->date_debut->format('d/m/Y') }}</td>
                    <td>{{ $location->date_fin->format('d/m/Y') }}</td>
                    <td>{{ number_format($location->montant, 2) }} €</td>
                    <td>
                        <span class="badge bg-{{ $location->etat == 'En cours' ? 'success' : ($location->etat == 'En attente' ? 'warning' : 'secondary') }}">
                            {{ $location->etat }}
                        </span>
                    </td>
                    <td>
                        @if($location->etat == 'En attente')
                            <div class="btn-group" role="group">
                                <form action="{{ route('admin.locations.approve', $location) }}" method="POST" class="d-inline me-2">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir valider cette location ?')">
                                        <i class="fas fa-check"></i> Valider
                                    </button>
                                </form>

                                <form action="{{ route('admin.locations.reject', $location) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir refuser cette location ?')">
                                        <i class="fas fa-times"></i> Refuser
                                    </button>
                                </form>
                            </div>
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $locations->links() }}
    </div>

    <!-- Messages de notification -->
    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger mt-3">
            {{ session('error') }}
        </div>
    @endif
</div>
@endsection
