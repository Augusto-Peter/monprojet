<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Je crée 5 consultation
        $consultations = Consultation::factory()->count(5)->create();
        // Je crée 10 personnes et attache aléatoirement une consultation à chaque personne
        Consultation::factory()->count(10)->make()
        ->each(function($consultation) use ($personnes) {
        $consultation->personne_id = $personnes->random()->id;
        $consultation->save();
        });
    }
}
