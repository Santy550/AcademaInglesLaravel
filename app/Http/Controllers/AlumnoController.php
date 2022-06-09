<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    public function getAlumnos(Request $request) {
        return response()->json([
            'success' => true,
            'mensaje' => 'Obtengo todos los alumnos desde el controller',
            'data'    => DB::table('alumno')->get()
        ]);
    }
}
