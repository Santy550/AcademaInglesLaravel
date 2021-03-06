<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public $table = 'grupo';

    use HasFactory;

    protected $fillable = [
        'alumno_id',
        'profesor_id',
        'numero_alumnos'
    ];

    protected $hidden = [
        'remember_token'
    ];

    public function grupoAlumno() {
        return $this->belongsTo(Alumno::class);
    }
}
