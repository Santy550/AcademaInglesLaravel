<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\DeleteTokenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\VisitanteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('profesores', [ProfesorController::class, 'getProfesores']);
Route::get('alumnos', [AlumnoController::class, 'getAlumnos']);
Route::post('visitante', [VisitanteController::class, 'insertVisitantes']);
Route::get('getVisitantes', [VisitanteController::class, 'getVisitantes']);
/*Route::post('login', [LoginController::class, 'authenticate']);
Route::get('mostrar', [LoginController::class, 'mostrar'])->middleware('auth:api');
Route::post('deleteToken', [DeleteTokenController::class, 'deleteToken'])->middleware('auth:api');*/
