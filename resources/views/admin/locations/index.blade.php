@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Gestion des Locations
    </h2>
@endsection

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <!-- Formulaire de filtrage -->
            <div class="p-6 border-b border-gray-200">
                <form method="GET" action="{{ route('admin.locations.index') }}" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">État</label>
                            <select name="etat" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="">Tous</option>
                                <option value="En cours" {{ request('etat') == 'En cours' ? 'selected' : '' }}>En cours</option>
                                <option value="Terminée" {{ request('etat') == 'Terminée' ? 'selected' : '' }}>Terminée</option>
                                <option value="En attente" {{ request('etat') == 'En attente' ? 'selected' : '' }}>En attente</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Montant minimum</label>
                            <input type="number" name="montant_min" value="{{ request('montant_min') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Montant maximum</label>
                            <input type="number" name="montant_max" value="{{ request('montant_max') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Date début</label>
                            <input type="date" name="date_debut" value="{{ request('date_debut') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Date fin</label>
                            <input type="date" name="date_fin" value="{{ request('date_fin') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Filtrer
                        </button>
                        <a href="{{ route('admin.locations.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-400 active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Réinitialiser
                        </a>
                    </div>
                </form>
            </div>

            <!-- Table des locations -->
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bien immobilier</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date début</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date fin</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Montant</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">État</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($locations as $location)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $location->client->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $location->bienImmobilier->titre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $location->date_debut->format('d/m/Y') }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $location->date_fin->format('d/m/Y') }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ number_format($location->montant, 2) }} €</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                        {{ $location->etat == 'En cours' ? 'bg-green-100 text-green-800' :
                                           ($location->etat == 'En attente' ? 'bg-yellow-100 text-yellow-800' :
                                            'bg-gray-100 text-gray-800') }}">
                                        {{ $location->etat }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($location->etat == 'En attente')
                                        <div class="flex space-x-2">
                                            <form action="{{ route('admin.locations.approve', $location) }}" method="POST" class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-black bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" onclick="return confirm('Êtes-vous sûr de vouloir valider cette location ?')">
                                                    <i class="fas fa-check mr-1"></i> Valider
                                                </button>
                                            </form>

                                            <form action="{{ route('admin.locations.reject', $location) }}" method="POST" class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" onclick="return confirm('Êtes-vous sûr de vouloir refuser cette location ?')">
                                                    <i class="fas fa-times mr-1"></i> Refuser
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        <span class="text-gray-400">-</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-4">
                    {{ $locations->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Messages de notification -->
    @if(session('success'))
        <div class="max-w-7xl mx-auto mt-4 sm:px-6 lg:px-8">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="max-w-7xl mx-auto mt-4 sm:px-6 lg:px-8">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                {{ session('error') }}
            </div>
        </div>
    @endif
</div>
@endsection
