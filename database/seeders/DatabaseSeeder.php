<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            AdministrateursTableSeeder::class,
            AgentsImmobiliersTableSeeder::class,
            ProprietairesTableSeeder::class,
            BiensImmobiliersTableSeeder::class,
            LocationsTableSeeder::class,
            ContratsTableSeeder::class,
            FacturesTableSeeder::class,
            DemandesTableSeeder::class,
        ]);
    }
}
