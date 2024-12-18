<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministrateursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $admins = [];
        for ($i = 1; $i <= 10; $i++) {
            $admins[] = [
                'utilisateur_id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('administrateurs')->insert($admins);
    }
}
