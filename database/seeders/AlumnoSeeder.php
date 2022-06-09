<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Seeder;
use function Sodium\increment;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*$alumno = Alumno::create([
            'nombre' => 'Prueba',
            'profesor_id' => '1',
            'apellidos' => 'Garcia Marquez',
            'telefono' => '654987258',
            'email' => 'prueba@prueba.com',
            'password' => bcrypt('12345678'),
        ]);*/
        Alumno::factory(10)->create();

    }
}
