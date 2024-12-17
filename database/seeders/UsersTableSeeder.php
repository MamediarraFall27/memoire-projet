<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            // Admins
            [
                'nom' => 'Diarra',
                'prenom' => 'Fall',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('Passer123@'),
                'adresse' => '123 Rue Principale',
                'telephone' => '123456789',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Diop',
                'prenom' => 'Aïssa',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('Passer123@'),
                'adresse' => '78 Avenue du Peuple',
                'telephone' => '741852963',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agents
            [
                'nom' => 'Sow',
                'prenom' => 'Aminata',
                'email' => 'agent1@gmail.com',
                'password' => Hash::make('Passer123@'),
                'adresse' => '45 Avenue de la République',
                'telephone' => '987654321',
                'role' => 'agent',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Kane',
                'prenom' => 'Ibrahima',
                'email' => 'agent2@gmail.com',
                'password' => Hash::make('Passer123@'),
                'adresse' => '12 Avenue des Arts',
                'telephone' => '147258369',
                'role' => 'agent',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Propriétaires
            [
                'nom' => 'Ba',
                'prenom' => 'Omar',
                'email' => 'proprietaire1@gmail.com',
                'password' => Hash::make('Passer123@'),
                'adresse' => '78 Boulevard de la Paix',
                'telephone' => '654987321',
                'role' => 'proprietaire',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Sy',
                'prenom' => 'Mariama',
                'email' => 'proprietaire2@gmail.com',
                'password' => Hash::make('Passer123@'),
                'adresse' => '34 Rue de la Liberté',
                'telephone' => '258369147',
                'role' => 'proprietaire',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Gueye',
                'prenom' => 'Abdou',
                'email' => 'proprietaire3@gmail.com',
                'password' => Hash::make('Passer123@'),
                'adresse' => '90 Rue de la Paix',
                'telephone' => '852963741',
                'role' => 'proprietaire',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Clients
            [
                'nom' => 'Ndiaye',
                'prenom' => 'Fatou',
                'email' => 'client1@gmail.com',
                'password' => Hash::make('Passer123@'),
                'adresse' => '90 Rue du Commerce',
                'telephone' => '321654987',
                'role' => 'client',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Fall',
                'prenom' => 'Moussa',
                'email' => 'client2@gmail.com',
                'password' => Hash::make('Passer123@'),
                'adresse' => '56 Boulevard de l\'Indépendance',
                'telephone' => '369147258',
                'role' => 'client',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Mbaye',
                'prenom' => 'Sophie',
                'email' => 'client3@gmail.com',
                'password' => Hash::make('Passer123@'),
                'adresse' => '12 Avenue de l\'Unité',
                'telephone' => '963741852',
                'role' => 'client',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
