<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Profesor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProfesorSeeder::class,
            AlumnoSeeder::class,
            GrupoSeeder::class,
            CursoSeeder::class,
            FacturaSeeder::class
        ]);
    }
}
