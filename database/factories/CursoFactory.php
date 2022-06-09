<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Curso::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(20),
            'fecha_inicio' => $this->faker->date('Y-m-d H:i:s'),
            'fecha_fin' => $this->faker->date('Y-m-d H:i:s'),

        ];
    }
}

