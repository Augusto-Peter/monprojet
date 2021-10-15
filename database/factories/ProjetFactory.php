<?php

namespace Database\Factories;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Projet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->word,
            'd_d_d' => $this->faker->word,
            'd_d_f' => $this->faker->word,
            'etape' => $this->faker->word,
            'pv' => $this->faker->word,
            'chef_projet' => $this->faker->word,
            ];
    }
}
