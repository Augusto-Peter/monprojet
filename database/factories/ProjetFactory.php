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
            'nom' => $this->faker->text,
            'd_d_d' => $this->faker->date,
            'd_d_f' => $this->faker->date,
            'etape' => $this->faker->text,
            'pv' => $this->faker->text,
            'chef_projet' => $this->faker->text,
            ];
    }
}
