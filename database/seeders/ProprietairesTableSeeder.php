<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProprietairesTableSeeder extends Seeder
{
    public function run()
    {
        // Récupérer les IDs des utilisateurs avec le rôle 'proprietaire'
        $proprietaireUsers = DB::table('users')
            ->where('role', 'proprietaire')
            ->pluck('id');

        $proprietaires = [];
        foreach ($proprietaireUsers as $userId) {
            $proprietaires[] = [
                'utilisateur_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        if (!empty($proprietaires)) {
            DB::table('proprietaires')->insert($proprietaires);
        }
    }
}
