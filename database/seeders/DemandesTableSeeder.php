<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemandesTableSeeder extends Seeder
{
    public function run()
    {
        // Récupérer les IDs des utilisateurs qui sont des clients
        $clientIds = DB::table('users')
            ->where('role', 'client')
            ->pluck('id')
            ->toArray();

        // Récupérer les IDs des biens immobiliers
        $bienIds = DB::table('biens_immobiliers')->pluck('id')->toArray();

        if (empty($clientIds) || empty($bienIds)) {
            return; // Si pas de clients ou de biens, on ne crée pas de demandes
        }

        $demandes = [];
        $statuts = ['En attente', 'Acceptée', 'Refusée'];

        for ($i = 1; $i <= 10; $i++) {
            $demandes[] = [
                'client_id' => $clientIds[array_rand($clientIds)],
                'bien_immobilier_id' => $bienIds[array_rand($bienIds)],
                'message' => 'Demande de visite pour le bien ' . $i,
                'statut' => $statuts[array_rand($statuts)],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('demandes')->insert($demandes);
    }
}
