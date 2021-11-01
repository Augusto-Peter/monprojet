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
            'type' => $this->faker->text,
            'taille' => $this->faker->numberBetween(1, 1000),
            'auteur' => $this->faker->text,
            'pv' => $this->faker->text,
            'chemin' => $this->faker->text,
            'description' => $this->faker->text
            ];
    }
}
