<?php

namespace Database\Factories;

use App\Models\Profesor;
use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Alumno::class;
    protected $model1 = Profesor::class;

    public function definition()
    {
        return [
            'profesor_id' => Profesor::factory(),
            'nombre' => $this->faker->name(20),
            'apellidos' => $this->faker->name(40),
            //'telefono' => $this->faker->numerify('555-555-555'),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ];
    }
}
