<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    public $table = 'profesor';

    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos',
        'telefono',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function profesorAlumno() {
        return $this->hasMany(Alumno::class);
    }

}
