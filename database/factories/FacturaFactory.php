<?php

namespace Database\Factories;

use App\Models\Alumno;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Alumno::class;
    protected $model1 = Curso::class;

    public function definition()
    {
        return [
            'alumno_id' => Alumno::factory(),
            'curso_id' => Curso::factory(),
            'precio' => $this->faker->numerify(500),
        ];
    }
}
