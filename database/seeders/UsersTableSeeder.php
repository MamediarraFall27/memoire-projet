<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'nom' => 'Diarra',
            'prenom' => 'Fall',
            'email' => 'diarrafall@gmail.com',
            'password' => Hash::make('Passer123@'),
            'adresse' => '123 Rue Principale',
            'telephone' => '123456789',
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
