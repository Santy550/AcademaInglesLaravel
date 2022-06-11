<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;

    public $table = 'clase';

    use HasFactory;

    protected $fillable = [
        'numero_clase',
        'numero_piso',
        'area'
    ];

    protected $hidden = [
        'remember_token'
    ];

    public function claseHorario() {
        return $this->hasMany(Horario::class);
    }
}
