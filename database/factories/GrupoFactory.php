<?php

namespace Database\Factories;

use App\Models\Grupo;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Grupo::class;

    public function definition()
    {
        return [
            'nombre_alumno' => $this->faker->name(20),
            'nombre_profesor' => $this->faker->name(1),
            'numero_alumnos' => $this->faker->randomNumber(2)
        ];
    }
}
