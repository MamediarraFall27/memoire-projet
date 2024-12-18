<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AgentsImmobiliersTableSeeder extends Seeder
{
    public function run()
    {
        $agents = [];
        for ($i = 1; $i <= 10; $i++) {
            $agents[] = [
                'utilisateur_id' => $i + 10,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('agents_immobiliers')->insert($agents);
    }
}