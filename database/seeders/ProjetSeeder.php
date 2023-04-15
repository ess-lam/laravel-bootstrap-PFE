<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Projet;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Projet::create([
            'etudiants' => [
                "1" => "hajar saidi",
                "2" => "islam essanhaji",
            ],
            'encadrant' => 'sana',
            'jurys' => 'samia',
            'sujet' => 'site web e-com',
            'theme' => 'informatique',
            'user_id' => 1
        ]);
    }
}
