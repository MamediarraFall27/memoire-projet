<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use App\Models\User;
use Illuminate\Http\Request;

class ProprietairesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proprietaires = Proprietaire::with('utilisateur')->get();
        return view('proprietaires.index', compact('proprietaires'));
    }

    // Formulaire de création d'un propriétaire
    public function create()
    {
        $utilisateurs = User::whereDoesntHave('proprietaire')->get();
         // Récupérer les utilisateurs sans propriétaire
        return view('proprietaires.create', compact('utilisateurs'));
    }

    // Enregistrer un nouveau propriétaire
    public function store(Request $request)
    {
        $request->validate([
            'utilisateur_id' => 'required|exists:users,id',
        ]);

        Proprietaire::create($request->all());
        return redirect()->route('proprietaires.index')->with('success', 'Propriétaire ajouté avec succès.');
    }

    // Afficher les détails d'un propriétaire
    public function show(Proprietaire $proprietaire)
    {
        $biens = $proprietaire->biensImmobiliers; // Biens possédés par le propriétaire
        return view('proprietaires.show', compact('proprietaire', 'biens'));
    }



    // Modifier un propriétaire (formulaire)
    public function edit(Proprietaire $proprietaire)
    {
        $utilisateurs = User::all();
        return view('proprietaires.edit', compact('proprietaire', 'utilisateurs'));
    }


    // Mettre à jour un propriétaire
    public function update(Request $request, Proprietaire $proprietaire)
    {
        $request->validate([
            'utilisateur_id' => 'required|exists:users,id',
        ]);

        $proprietaire->update($request->all());
        return redirect()->route('proprietaires.index')->with('success', 'Propriétaire mis à jour avec succès.');
    }
    
    // Supprimer un propriétaire
    public function destroy(Proprietaire $proprietaire)
    {
        $proprietaire->delete();
        return redirect()->route('proprietaires.index')->with('success', 'Propriétaire supprimé avec succès.');
    }
}
