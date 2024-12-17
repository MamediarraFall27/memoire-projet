<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiensImmobiliersTableSeeder extends Seeder
{
    public function run()
    {
        // Récupérer tous les IDs des propriétaires
        $proprietaireIds = DB::table('proprietaires')->pluck('id')->toArray();

        if (empty($proprietaireIds)) {
            return; // Si pas de propriétaires, on ne crée pas de biens
        }

        $biens = [];
        $etats = ['Disponible', 'Loué', 'En rénovation'];

        for ($i = 1; $i <= 10; $i++) {
            $biens[] = [
                'adresse' => 'Adresse bien ' . $i,
                'prix' => rand(100000, 1000000),
                'description' => 'Description détaillée du bien immobilier ' . $i,
                'etat' => $etats[array_rand($etats)],
                'proprietaire_id' => $proprietaireIds[array_rand($proprietaireIds)], // Utilisez un ID existant aléatoire
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('biens_immobiliers')->insert($biens);
    }
}
