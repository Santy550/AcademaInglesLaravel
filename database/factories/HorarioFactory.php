<?php

namespace Database\Factories;

use App\Models\Clase;
use App\Models\Horario;
use Illuminate\Database\Eloquent\Factories\Factory;

class HorarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Horario::class;
    protected $model1 = Clase::class;

    public function definition()
    {
        return [
            'horario_inicio' => $this->faker->dateTime(),
            'horario_fin' => $this->faker->dateTime(),
            'clase_id' => Clase::factory(),
        ];
    }
}
