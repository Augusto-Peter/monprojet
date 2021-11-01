<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Consultation;
use App\Models\Personne;
use App\Models\Therapy;
use App\Models\Document;
use App\Models\Projet;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Je crée 10 personne
        $personnes = Personne::factory()->count(10)->create();
        $therapies = Therapy::factory()->count(5)->create();

        // Je crée 5 projet et attache aléatoirement une consultation à chaque personne
        $projets = Projet::factory()->count(5)->make()
        ->each(function($projet) use ($personnes) {
        $projet->personne_id = $personnes->random()->id; 
        $projet->save();
        });
        // Je crée 10 consultation et attache aléatoirement une consultation à chaque personne
        $consultations = Consultation::factory()->count(5)->make()
        ->each(function($consultation) use ($personnes, $therapies, $projets ) {
        $consultation->personne_id = $personnes->random()->id;
        $consultation->therapy_id = $therapies->random()->id;
        $consultation->projet_id = $projets->random()->id;
        $consultation->save();
        });
        // Je crée 10 consultation et attache aléatoirement une consultation à chaque personne
        $documents = Document::factory()->count(10)->make()
        ->each(function($document) use ($consultations) {
        $document->consultation_id = $consultations->random()->id;
        $document->save();
        });
    }
}
