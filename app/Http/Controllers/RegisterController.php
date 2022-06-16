<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function register(Request $request) {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $validateData['password'] = Hash::make($request->password);

        $alumno = User::create($validateData);

        $accessToken = $alumno->createToken('authToken')->accessToken;

        return response([
            'user' => $alumno,
            'access_token' => $accessToken
        ]);

    }
}
