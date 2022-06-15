<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogOut extends Controller
{
    public function logOut() {
        Auth::alumno()->token()->delete();
        return "Token eliminado con éxito";
    }
}
