<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacturesTableSeeder extends Seeder
{
    public function run()
    {
        $factures = [];
        for ($i = 1; $i <= 10; $i++) {
            $factures[] = [
                'location_id' => rand(1, 10),
                'montant' => rand(500, 2000),
                'mode_paiement' => ['Espèces', 'Carte bancaire', 'Virement'][rand(0, 2)],
                'date_facture' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('factures')->insert($factures);
    }
}
