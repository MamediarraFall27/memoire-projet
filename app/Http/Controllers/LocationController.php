<?php
namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index(Request $request)
    {
        // Démarrer la requête de base
        $query = Location::with(['bienImmobilier', 'client']);

        // Filtrage par état
        if ($request->filled('etat') && $request->etat !== 'Tous') {
            $query->where('etat', $request->etat);
        }

        // Filtrage par montant
        if ($request->filled('montant_min')) {
            $query->where('montant', '>=', (float)$request->montant_min);
        }
        if ($request->filled('montant_max')) {
            $query->where('montant', '<=', (float)$request->montant_max);
        }

        // Filtrage par dates
        if ($request->filled('date_debut')) {
            $query->whereDate('date_debut', '>=', $request->date_debut);
        }
        if ($request->filled('date_fin')) {
            $query->whereDate('date_fin', '<=', $request->date_fin);
        }

        // Récupérer les locations paginées
        $locations = $query->paginate(10);

        Log::info('Nombre de locations : ' . $locations->total());
        Log::info('SQL Query: ' . $query->toSql());
        Log::info('SQL Bindings: ', $query->getBindings());

        return view('admin.locations.index', compact('locations'));
    }

    public function approveLocation(Location $location)  // Renommé de validate à approveLocation
    {
        if ($location->etat !== 'En attente') {
            return back()->with('error', 'Seules les locations en attente peuvent être validées.');
        }

        $location->update([
            'etat' => 'En cours'
        ]);

        return back()->with('success', 'La location a été validée avec succès.');
    }

    public function reject(Location $location)
    {
        if ($location->etat !== 'En attente') {
            return back()->with('error', 'Seules les locations en attente peuvent être refusées.');
        }

        $location->update([
            'etat' => 'Terminée'
        ]);

        return back()->with('success', 'La location a été refusée.');
    }
}
