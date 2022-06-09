<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Visitante;

class VisitanteController extends Controller
{
    public function insertVisitantes(Request $request)
    {

        $nombre = $request->get('nombre');
        $email = $request->get('email');
        $mensaje = $request->get('mensaje');

        DB::table('visitante')->insert([
            'nombre' => $nombre,
            'email' => $email,
            'mensaje' => $mensaje
        ]);
    }

    public function getVisitantes(Request $request)
    {
        return response()->json([
            'success' => true,
            'mensaje' => 'Obtengo todos los visitantes desde el controller',
            'data' => DB::table('visitante')->get()
        ]);
    }
}
