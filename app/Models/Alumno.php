<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public $table = 'alumno';

    use HasFactory;

    protected $fillable = [
        'nombre',
        'profesor_id',
        'apellidos',
        'telefono',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function alumnoProfesor() {
        return $this->belongsTo(Profesor::class);
    }

}