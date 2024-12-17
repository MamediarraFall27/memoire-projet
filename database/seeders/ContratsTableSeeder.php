<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContratsTableSeeder extends Seeder
{
    public function run()
    {
        $contrats = [];
        for ($i = 1; $i <= 10; $i++) {
            $contrats[] = [
                'location_id' => $i,
                'type' => ['Bail commercial', 'Bail d\'habitation'][rand(0, 1)],
                'contenu' => 'Contenu du contrat ' . $i,
                'date_signature' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('contrats')->insert($contrats);
    }
}
