<?php

namespace Database\Factories;

use App\Models\Document;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Document::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->word,
            'type' => $this->faker->word,
            'taille' => $this->faker->word,
            'auteur' => $this->faker->word,
            'pv' => $this->faker->word,
            'chemin' => $this->faker->word,
            'description' => $this->faker->sentence()
            ];
    }
}
