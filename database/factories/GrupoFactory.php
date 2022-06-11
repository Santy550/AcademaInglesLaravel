<?php

namespace Database\Factories;

use App\Models\Alumno;
use App\Models\Grupo;
use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Grupo::class;
    protected $model1 = Alumno::class;
    protected $model2 = Profesor::class;

    public function definition()
    {
        return [
            'alumno_id' => Alumno::factory(),
            'profesor_id' => Profesor::factory(),
            'numero_alumnos' => $this->faker->randomNumber(2)
        ];
    }
}
