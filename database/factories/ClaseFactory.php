<?php

namespace Database\Factories;

use App\Models\Clase;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    protected $model = Clase::class;

    public function definition()
    {
        return [
            'numero_clase' => $this->faker->name(20),
            'numero_piso' => $this->faker->randomNumber(2),
            'area' => $this->faker->name(20),
        ];
    }
}
