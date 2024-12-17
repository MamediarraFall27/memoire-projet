<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
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
            return;
        }

        $locations = [];
        $etats = ['En cours', 'Terminée', 'En attente'];

        for ($i = 1; $i <= 10; $i++) {
            $locations[] = [
                'bien_immobilier_id' => $bienIds[array_rand($bienIds)],
                'client_id' => $clientIds[array_rand($clientIds)],
                'date_debut' => now(),
                'date_fin' => now()->addMonths(12),
                'montant' => rand(500, 2000),
                'etat' => $etats[array_rand($etats)],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('locations')->insert($locations);
    }
}
