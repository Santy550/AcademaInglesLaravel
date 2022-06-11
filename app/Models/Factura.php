<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    public $table = 'factura';

    use HasFactory;

    protected $fillable = [
        'alumno_id',
        'curso_id',
        'precio'
    ];

    protected $hidden = [
        'remember_token'
    ];

    public function facturaAlumno() {
        return $this->belongsTo(Alumno::class);
    }
}
