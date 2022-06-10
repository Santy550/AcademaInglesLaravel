<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeleteTokenController extends Controller
{
    public function deleteToken() {
        Auth::alumno()->token()->delete();
        return "Token eliminado con éxito";
    }
}
