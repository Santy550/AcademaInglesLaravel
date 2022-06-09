<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public $table = 'grupo';

    use HasFactory;

    protected $fillable = [
        'nombre',
        'numero_alumnos'
    ];

    protected $hidden = [
        'remember_token'
    ];
}
