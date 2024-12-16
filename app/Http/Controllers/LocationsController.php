<?php

namespace App\Http\Controllers;


use App\Models\Location;
use App\Models\User;
use App\Models\BienImmobilier;
use Illuminate\Http\Request;


class LocationsController extends Controller
{

   // Afficher toutes les locations
   public function index()
        {
            // Récupérer toutes les locations avec leurs relations
            $locations = Location::with('bienImmobilier', 'client')->get();
             // Retourner la vue avec les données
            return view('locations.index', compact('locations'));
        }

    // Afficher le formulaire de création
    public function create()
        {
            $biens = BienImmobilier::all();// Récupérer tous les biens immobiliers

            $clients = User::where('role','client')->get(); // Filtrer les clients

            // Retourner la vue 'locations.create' avec les données nécessaires
            return view ('locations.create', compact('biens', 'clients'));
        }


     // Enregistrer une nouvelle location
     public function store(Request $request)
    {
         $request->validate([

             'date_debut' => 'required|date',
             'date_fin' => 'required|date|after_or_equal:date_debut',
             'montant' => 'required|numeric|min:0',
             'etat' => 'required|string',
             'bien_immobilier_id' => 'required|exists:biens_immobiliers,id',
             'client_id' => 'required|exists:users,id',
         ]);

         Location::create($request->all());

         return redirect()->route('locations.index')->with('success', 'Location créée avec succès.');
    }


     // Afficher une location spécifique
     public function show(Location $location)
     {
         return view('locations.show', compact('location'));
     }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    // Supprimer une location
    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->route('locations.index')->with('success', 'Location supprimée avec succès.');
    }
}
