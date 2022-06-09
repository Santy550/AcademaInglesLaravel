<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public $table = 'curso';

    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'fecha_fin'
    ];

    protected $hidden = [
        'remember_token'
    ];
}
