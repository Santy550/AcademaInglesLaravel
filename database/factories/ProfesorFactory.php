<?php

namespace Database\Factories;

use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Profesor::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(20),
            'apellidos' => $this->faker->name(40),
            //'telefono' => $this->faker->numerify('###-###-###'),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ];
    }
}
