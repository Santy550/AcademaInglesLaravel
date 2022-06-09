<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfesorController extends Controller
{
    public function getProfesores(Request $request) {
        return response()->json([
            'success' => true,
            'mensaje' => 'Obtengo todos los profesores desde el controller',
            'data'    => DB::table('profesor')->get()
        ]);
    }
}
